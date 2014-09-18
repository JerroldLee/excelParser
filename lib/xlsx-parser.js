// xlsx解析器，依赖node-xlsx模块

var xlsxReader = require('node-xlsx')
  , _ = require('underscore');

/**
 * @description: 读取xlsx文件并解析成类似CSV格式。
    每个工作目录(worksheet)独占一行，并用sheet:name标识
    xlsx里的每一行独占一行，并且cell之间用逗号分隔，最后一个cell没有逗号
 * @param <xlsx>: string xlsx文件路径
 * @return <result>: string 类似CSV格式的字符串
    sheet:floor_1
    sku,mdname,mdprice,title
    E1724118,网络售价,12.01,测试title
    E9970880,网络售价,12,测试title
    E3914655,网络售价,11.23,测试title
    E4145293,网络售价,34,测试title
    sheet:floor_2
    sku,mdname,mdprice,title
    E2535746,网络售价,1,测试title
    E1183532,网络售价,9,测试title
    E1460696,网络售价,23.5,测试title
    E2343882,网络售价,23.99,测试title
    E2541503,网络售价,19.9,测试title
    E1741068,网络售价,2,测试title
    sheet:floor_3
    sku,mdname,mdprice,title
    E6091232,网络售价,12,测试title
    E9495188,网络售价,13,测试title
    E3116358,网络售价,543,测试title
    E4862471,网络售价,23.09,测试title
    E5729920,网络售价,334.98,测试title
 */
var toCSV = function(xlsx) {
  var worksheets
    , result;

  worksheets = xlsxReader.parse(xlsx).worksheets;

  // 该嵌套结构依赖于node-xlsx模块读取xlsx文件的格式
  result = _.reduce(worksheets, function(memo, value) {
    var val = '';

    val = _.reduce(value.data, function(memo, value) {
      console.dir(value.length);
      // return memo += _.reduce(value, function(memo, value, index, list) {
      //   var finalVal = value.value;
      //   if (!finalVal || finalVal !== finalVal) {
      //     finalVal = '无效值';
      //   }
      //   return memo += index + 1 === list.length ? finalVal + '\n' : finalVal + ',';
      // }, '');
    }, '');

    return memo += 'sheet:' + value.name + ';;\n' + val;
  }, '');

  return result;
};


/**
 * @description: 读取xlsx文件并解析成JSON格式
    每个工作目录(worksheet)，解析成对象属性，key为工作目录的名，val为数组
 * @param <xlsx>: string xlsx文件路径
 * @return JSON
    { floor_1:
      [ [ 'sku', 'mdname', 'mdprice', 'title' ],
        [ 'E1724118', '网络售价', 12.01, '测试title' ],
        [ 'E9970880', '网络售价', 12, '测试title' ],
        [ 'E3914655', '网络售价', 11.23, '测试title' ],
        [ 'E4145293', '网络售价', 34, '测试title' ] ],
      floor_2:
       [ [ 'sku', 'mdname', 'mdprice', 'title' ],
         [ 'E2535746', '网络售价', 1, '测试title' ],
         [ 'E1183532', '网络售价', 9, '测试title' ],
         [ 'E1460696', '网络售价', 23.5, '测试title' ],
         [ 'E2343882', '网络售价', 23.99, '测试title' ],
         [ 'E2541503', '网络售价', 19.9, '测试title' ],
         [ 'E1741068', '网络售价', 2, '测试title' ] ],
      floor_3:
       [ [ 'sku', 'mdname', 'mdprice', 'title' ],
         [ 'E6091232', '网络售价', 12, '测试title' ],
         [ 'E9495188', '网络售价', 13, '测试title' ],
         [ 'E3116358', '网络售价', 543, '测试title' ],
         [ 'E4862471', '网络售价', 23.09, '测试title' ],
         [ 'E5729920', '网络售价', 334.98, '测试title' ] ]
    }
 */
var toJSON = function(xlsx) {
  var worksheets,
    result;

  worksheets = xlsxReader.parse(xlsx).worksheets;

  // 该嵌套结构依赖于node-xlsx模块读取xlsx文件的格式
  result = _.reduce(worksheets, function(memo, value) {
    var val = [];

    val = _.map(value.data, function(value) {
      return _.map(value, function(value) {
        return value.value;
      });
    });

    memo[value.name] = val;
    return memo;
  }, {});

  return result;
};

exports.toJSON = toJSON;
exports.toCSV = toCSV;
