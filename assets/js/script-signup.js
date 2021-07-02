$(document).ready(function(){
    $('#signup').on('click', function(){
        $(this).removeClass("btn-inactive-method");
        $(this).addClass("btn-active-method");
        $('#login').removeClass("btn-active-method");
        $('#login').addClass("btn-inactive-method");
        $('#signup-form').slideDown("slow");
        $('#login-form').attr("style", "display:none!important;");
    });
    $('#login').on('click', function(){
        $(this).removeClass("btn-inactive-method");
        $(this).addClass("btn-active-method");
        $('#signup').removeClass("btn-active-method");
        $('#signup').addClass("btn-inactive-method");
        $('#login-form').slideDown("slow");
        $('#signup-form').attr("style", "display:none!important;");
    });

    // $("#get_otp_btn").click(function() {
    //     $("#reset_otp").slideDown('slow');
    //     $("#reset_email").attr('style', 'display:none!important;');
    // });

    function show_hide_password(clickOn,target){

        $(clickOn).click(function() {

            if($(target).attr("type")=="text"){
                $(target).attr("type", "password");
                $(target).attr("placeholder", "••••••••");
                $(clickOn).children('img').addClass('hide');
                $(target).focus();


            }else{
                $(target).attr("type", "text");
                $(target).attr("placeholder", "abc@123");
                $(target).focus();
                $(clickOn).children('img').removeClass('hide');
                // console.log($(clickOn).children('img'));
                
            }
        });

        // $(target).keydown(function() {
        //     if($(target).attr('type')!='password'){
        //       $(target).attr("placeholder", "••••••••");
        //       $(target).attr('type','password');
        //       $(clickOn).children('img').addClass('hide');
        //     }
        // });

        // $(target).blur(function() {
        //     if($(target).attr('type')!='password'){
        //       $(target).attr("placeholder", "••••••••");
        //       $(target).attr('type','password');
        //       $(clickOn).children('img').addClass('hide');
        //     }
        // });

        // if($(target).attr("type")=="text"){
        //   $(clickOn).children('img').addClass('hide');
        // }else{
        //   $(clickOn).children('img').removeClass('hide');
        // }

        // console.log("run");

    }

    show_hide_password('#show_pass_password_signup','#enterPassword_signup');

    show_hide_password('#show_pass_repassword_signup','#reEnterPassword_signup');

    show_hide_password('#show_pass_password_login','#enterPassword_login');

    show_hide_password("#show_password_reset", "#reset_password_field");

    show_hide_password("#show_repassword_reset","#reset_re_password_field")


    $('#resend_email_signup').click(function(){
        $(this).rotate();
    });
});

$.fn.rotate=function(options) {
    var $this=$(this), prefixes, opts, wait4css=0;
    prefixes=['-Webkit-', '-Moz-', '-O-', '-ms-', ''];
    opts=$.extend({
      startDeg: false,
      endDeg: 180,
      duration: 0.8,
      count: 1,
      easing: 'linear',
      animate: {},
      forceJS: false
    }, options);
  
    function supports(prop) {
      var can=false, style=document.createElement('div').style;
      $.each(prefixes, function(i, prefix) {
        if (style[prefix.replace(/\-/g, '')+prop]==='') {
          can=true;
        }
      });
      return can;
    }
  
    function prefixed(prop, value) {
      var css={};
      if (!supports.transform) {
        return css;
      }
      $.each(prefixes, function(i, prefix) {
        css[prefix.toLowerCase()+prop]=value || '';
      });
      return css;
    }
  
    function generateFilter(deg) {
      var rot, cos, sin, matrix;
      if (supports.transform) {
        return '';
      }
      rot=deg>=0 ? Math.PI*deg/180 : Math.PI*(360+deg)/180;
      cos=Math.cos(rot);
      sin=Math.sin(rot);
      matrix='M11='+cos+',M12='+(-sin)+',M21='+sin+',M22='+cos+',SizingMethod="auto expand"';
      return 'progid:DXImageTransform.Microsoft.Matrix('+matrix+')';
    }
  
    supports.transform=supports('Transform');
    supports.transition=supports('Transition');
  
    opts.endDeg*=opts.count;
    opts.duration*=opts.count;
  
    if (supports.transition && !opts.forceJS) { // CSS-Transition
      if ((/Firefox/).test(navigator.userAgent)) {
        wait4css=(!options||!options.animate)&&(opts.startDeg===false||opts.startDeg>=0)?0:25;
      }
      $this.queue(function(next) {
        if (opts.startDeg!==false) {
          $this.css(prefixed('transform', 'rotate('+opts.startDeg+'deg)'));
        }
        setTimeout(function() {
          $this
            .css(prefixed('transition', 'all '+opts.duration+'s '+opts.easing))
            .css(prefixed('transform', 'rotate('+opts.endDeg+'deg)'))
            .css(opts.animate);
        }, wait4css);
  
        setTimeout(function() {
          $this.css(prefixed('transition'));
          if (!opts.persist) {
            $this.css(prefixed('transform'));
          }
          next();
        }, (opts.duration*1000)-wait4css);
      });
  
    } else { // JavaScript-Animation + filter
      if (opts.startDeg===false) {
        opts.startDeg=$this.data('rotated') || 0;
      }
      opts.animate.perc=100;
  
      $this.animate(opts.animate, {
        duration: opts.duration*1000,
        easing: $.easing[opts.easing] ? opts.easing : '',
        step: function(perc, fx) {
          var deg;
          if (fx.prop==='perc') {
            deg=opts.startDeg+(opts.endDeg-opts.startDeg)*perc/100;
            $this
              .css(prefixed('transform', 'rotate('+deg+'deg)'))
              .css('filter', generateFilter(deg));
          }
        },
        complete: function() {
          if (opts.persist) {
            while (opts.endDeg>=360) {
              opts.endDeg-=360;
            }
          } else {
            opts.endDeg=0;
            $this.css(prefixed('transform'));
          }
          $this.css('perc', 0).data('rotated', opts.endDeg);
        }
      });
    }
  
    return $this;
  };