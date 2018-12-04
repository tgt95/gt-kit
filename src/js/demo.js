/* Core Init */
var baseColor = ['custom', 'indigo','green', 'teal', 'cyan', 'black', 'info', 'dark'];

var Demo = {
    shuffleBackground: function() {
        setInterval(function(){
            var random = Math.floor(Math.random() * baseColor.length),
                bg = $('[shuffle-bg]');

                bg.attr('layer-bg', baseColor[random]);
        }, 5000);
    },
    pageOnLoad: function() {
        setTimeout(function(){ !body.hasClass('sidebar-open') && ($('.sidebar-toggle').trigger('click')); }, 3000);
    },
    pageSettings: function(){
        $('#toggle-fixed-header').on('click', function() {
            var prop = $(this).prop('checked');
            prop == true ? body.addClass('sidebar-fixed navbar-top-fixed') : body.removeClass('sidebar-fixed navbar-top-fixed')
        });
    },
    init : function(){
        this.shuffleBackground();
        this.pageOnLoad();
        this.pageSettings();
    }
}

    
