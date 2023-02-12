  //提示函数
  function error(dom,error){
    dom.focus();
    $('.error').remove();
    dom.after('<p class="error" style="margin:0;color:red;line-height:20px;text-align:center;">'+error+'</p>');
    setTimeout(function(){$('.error').remove();dom.css('margin-bottom','');},1000);
  }

  function random_str(len) {
      var chars = "abcdefghijklmnopqrstuvwxyz" 
          + "ABCDEFGHIJKLMNOPQRSTUVWXYZ" 
          + "1234567890";
      var idx = 0;
      var random_s = "";
      
      len = parseInt(len);
      if (!len || len == "NaN" || len < 6) {
          len = 6;
      }
      for (var i = 0; i < len; i++) {
          idx = Math.floor(Math.random() * chars.length);
          random_s += chars.substr(idx, 1);
      }
      return random_s;
  }