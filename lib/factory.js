

/**
 * @description: 工厂函数，用于生成判断文件是否符合指定扩展名的function
 * @param <string>: 扩展名
 * @return <function>: 判断函数
 */
var isType = function(type) {
  return function(path) {
    type = /^./.test(type) ? type : '.' + type;
    return path.slice(-type.length) === type;
  };
};

var hasType = function(type) {
  return function(path) {
    var _isXXXFile = isType(type);
    if (!path) {
      throw new Error("请指定" + type + "文件");
      // "没有这样的文件: '" + path + "'"
    } else {
      if (!_isXXXFile(path)) {
        throw new Error("'" + path + "' 不是" + type + "文件");
      }
    }
    return true;
  };
};

exports.isType = isType;
exports.hasType = hasType;
