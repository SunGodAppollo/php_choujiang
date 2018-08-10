;(function () {
  window.addEventListener('DOMContentLoaded', function (e) {
    var contentArray = [
      {
        // <!--友盟CNZZ统计代码-->
        type: 'text/javascript',
        src: 'https://s19.cnzz.com/z_stat.php?id=1274110282&show=pic',
        attrs: {
          class: 'cnzz',
          id: 'cnzz_script'
        }
      }
    ];
    var camelConverse = function (src) {
      var reg = /([A-Z])/g;
      return src.replace(reg, '-$1').toLocaleLowerCase()
    };
    var esStringConcat = function (src) {
      return `window.addEventListener('DOMContentLoaded', function (e) {` + src + `})`
    };
    var scriptGenerator = function (data) {
      var frg = document.createDocumentFragment();
      data.forEach(function (item, index) {
        var script = document.createElement('script');
        if (item.src) {
          script.src = item.src
        }
        if (item.attrs) {
          for (var k in item.attrs) {
            script.setAttribute(camelConverse(k), item.attrs[k])
          }
        }
        if (item.innerHTML) {
          script.innerHTML = item.useSafeDOM
            ? esStringConcat(item.innerHTML).replace('`', '')
            : item.innerHTML.replace('`', '')
        }
        frg.appendChild(script)
      });
      return frg
    };
    document.getElementsByTagName('body')[0].appendChild(scriptGenerator(contentArray));
  })
})();