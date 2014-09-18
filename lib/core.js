var fs = require('fs')
  , path = require('path')
  , _ = require('underscore')
  , Factory = require('./factory')
  , xlsxParser = require('./xlsx-parser');

var info = console.info
  , hasPHPFile = Factory.hasType('php')
  , hasXLSXFile = Factory.hasType('xlsx');

exports.sayHello = function(env) {
  var who = env.who || '';
  info('hello ' + who + ' !');
};

exports.updateSKU = function(env) {
  var source = env.source
    , target = env.target
    , floors = []
    , xlsxCSV;

  // 检查参数
  hasXLSXFile(source);
  hasPHPFile(target);

  xlsxCSV = xlsxParser.toCSV(source);

  // info(xlsxCSV);
  // console.dir(xlsxCSV);

  // floors = xlsxCSV.split(/\n(?=sheet:)/);
  // _.each(floors, function(value) {
  //   var tmp = value.split(/;;/);
  //   _insertPHPSnippet(target, tmp[0].slice(6), _buildPHPSnippet(tmp[1]));
  // });
};


/**
 * @description: 件CSV格式的文本组合成PHP片段
 * @param <csv>: string CSV格式的文本
 * @return <data>: string PHP片段
 */
function _buildPHPSnippet(csv) {
  var lineArr = [],
    result = '', // 构建结果
    keys = []; // 关键字段

  // 过滤空行
  lineArr = _.filter(csv.split('\n'), function(value, index) {
    return value.trim() !== '';
  });

  // 去除多余字符,如空格、换行等
  lineArr = _.map(lineArr, function(value, index) {
    return value.trim().replace(/\r\n/g, '');
  });

  result = _.reduce(lineArr, function(result, value, index, arr) {
    var tmp = '';

    if (index === 0) {
      keys = value.split(/,|;/g);
      return result + '';
    } else {
      tmp = _.reduce(value.split(/,|;/g), function(meta, value, index, arr) {
        var prefix = '';

        prefix = index === 0 ? 'array(' : ',';
        value = value.trim().replace(/r\n/g, '');
        return meta + (prefix + "'" + keys[index] + "'=>'" + value + "'");
      }, '');
      tmp += '),\n';
    }

    return result + tmp;
  }, '');

  result = result.replace(/\w*,*\n*\w*$/, '');

  return result;

}

/**
 * 将生成的PHP片段插入PHP文件的指定位置
 * @param <path>:string  PHP文件路径
 * @param <mark>:string  PHP片段标识
 * @param <snippet>:string  需要插入的PHP片段
 * @return <flag>:boolean 操作是否成功
 */
function _insertPHPSnippet(path, mark, snippet) {
  var newContent,
    oldContent,
    markRegExp = new RegExp('(\\\/\\\/\\s*@' + mark + ')[\\s\\S]*?' + '\\1');

  oldContent = fs.readFileSync(path, {
    encoding: 'utf-8'
  });

  // fs.readFile(path, { encoding: 'utf-8' }, function(err, data) {

  newContent = oldContent.replace(markRegExp, '\/\/@' + mark + '\n' + snippet + '\n\/\/@' + mark);
  fs.writeFileSync(path, newContent);
  // });
}