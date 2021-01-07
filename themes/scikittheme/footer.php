
<!-- <div class="container-fluid py-3">
  <div class="container sk-landing-container">
        <a class="sk-footer-funding-link" href="about.html#funding">
        <div class="text-center">
                <p class="mt-2">
                  scikit-learn development and maintenance are financially supported by
                </p>
                <img class="sk-footer-funding-logo" src="_static/inria-small.png" title="INRIA">
                <img class="sk-footer-funding-logo" src="_static/columbia-small.png" title="Columbia University">
                <img class="sk-footer-funding-logo" src="_static/sloan_logo-small.png" title="Alfred P. Sloan Foundation" >
                <img class="sk-footer-funding-logo" src="_static/sydney-stacked-small.png" title="The University of Sydney">
                <img class="sk-footer-funding-logo" src="_static/microsoft-small.png" title="Microsoft" >
                <img class="sk-footer-funding-logo" src="_static/bcg-small.png" title="Boston Consulting Group" >
                <img class="sk-footer-funding-logo" src="_static/axa-small.png" title="AXA Assurances" >
                <img class="sk-footer-funding-logo" src="_static/bnp-small.png" title="BNP Paris Bas Cardif" >
                <img class="sk-footer-funding-logo" src="_static/fujitsu-small.png" title="Fujitsu" >
                <img class="sk-footer-funding-logo" src="_static/intel-small.png" title="Intel" >
                <img class="sk-footer-funding-logo" src="_static/nvidia-small.png" title="Nvidia" >
                <img class="sk-footer-funding-logo" src="_static/dataiku-small.png" title="Dataiku" >
        </div>
        </a>
  </div>
</div> -->

<script src="_static/js/vendor/bootstrap.min.js"></script>

<script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-22606712-2', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>


<script>
$(document).ready(function() {
    /* Add a [>>>] button on the top-right corner of code samples to hide
     * the >>> and ... prompts and the output and thus make the code
     * copyable. */
    var div = $('.highlight-python .highlight,' +
                '.highlight-python3 .highlight,' +
                '.highlight-pycon .highlight,' +
		'.highlight-default .highlight')
    var pre = div.find('pre');

    // get the styles from the current theme
    pre.parent().parent().css('position', 'relative');
    var hide_text = 'Hide prompts and outputs';
    var show_text = 'Show prompts and outputs';

    // create and add the button to all the code blocks that contain >>>
    div.each(function(index) {
        var jthis = $(this);
        if (jthis.find('.gp').length > 0) {
            var button = $('<span class="copybutton">&gt;&gt;&gt;</span>');
            button.attr('title', hide_text);
            button.data('hidden', 'false');
            jthis.prepend(button);
        }
        // tracebacks (.gt) contain bare text elements that need to be
        // wrapped in a span to work with .nextUntil() (see later)
        jthis.find('pre:has(.gt)').contents().filter(function() {
            return ((this.nodeType == 3) && (this.data.trim().length > 0));
        }).wrap('<span>');
    });

    // define the behavior of the button when it's clicked
    $('.copybutton').click(function(e){
        e.preventDefault();
        var button = $(this);
        if (button.data('hidden') === 'false') {
            // hide the code output
            button.parent().find('.go, .gp, .gt').hide();
            button.next('pre').find('.gt').nextUntil('.gp, .go').css('visibility', 'hidden');
            button.css('text-decoration', 'line-through');
            button.attr('title', show_text);
            button.data('hidden', 'true');
        } else {
            // show the code output
            button.parent().find('.go, .gp, .gt').show();
            button.next('pre').find('.gt').nextUntil('.gp, .go').css('visibility', 'visible');
            button.css('text-decoration', 'none');
            button.attr('title', hide_text);
            button.data('hidden', 'false');
        }
    });

	/*** Add permalink buttons next to glossary terms ***/
	$('dl.glossary > dt[id]').append(function() {
		return ('<a class="headerlink" href="#' +
			    this.getAttribute('id') +
			    '" title="Permalink to this term">¶</a>');
	});
});

</script>
    <script src="https://scikit-learn.org/versionwarning.js"></script>
</body>
</html>