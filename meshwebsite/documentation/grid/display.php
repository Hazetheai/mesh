<?php

//Page variables
$pageData = [
	'pageTitle' => 'Display',
	'pageDescription' => 'Easily toggle the display of items at each breakpoint by using our straight forward display classes. ',
    'activePage' => 'display',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'hiding' => 'Hiding',
    'examples' => 'Examples',
    'variations' => 'Variations'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content flex-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b1-light hash">Usage</h2>
                    <p class="secondary-lead">
                        The display property classes allows you to switch the css display property at each breakpoint, allowing you to hide and show elements in the DOM responsively. 
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>You can target the display class by using <code class="inline">d-{breakpoint}-{property}</code>. The breakpoint being optional and one of our five breakpoints and the properties being outlined below.</li>
                            <li>These classes effect the breakpoint and upwards, for example - <code class="inline">d-tab-flex</code> will make the element's display 'flex' on tablet, desktop & HD screens.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Properties:</h3>
                        <ul class="list">
                            <li>none</li>
                            <li>inline</li>
                            <li>inline-block</li>
                            <li>block</li>
                            <li>flex</li>
                            <li>inline-flex</li>
                            <li>table</li>
                            <li>table-row</li>
                            <li>table-cell</li>
                        </ul>
                    </div>
                </article>

                <!-- Hiding -->
                <article class="section-scroll" id="hiding">
                    <h2 class="b-b1-light hash">Hiding</h2>
                    <p class="secondary-lead"><span class="c-danger">ADD TABLE HERE!</span></p>
                </article>

                <!-- Examples -->
                <article class="section-scroll" id="examples">
                    <h2 class="b-b1-light hash">Examples</h2>
                    <h3 class="mt-3">Hiding elements:</h3>
                    <p>
                        Using our table above, we can apply the theory to something practical. Here the third element will only be visible on desktop screens.
                    </p>
                    <div class="column-demo c-white mb-3">
                        <div class="br d-flex mb-3 justify-content-center justify-content-desk-between t-center">
                            <div class="text px-3 mr-2 br mx-0 w-30">
                                element
                            </div>                            
                            <div class="text px-3 mx-2 br mx-0 w-30">
                                element
                            </div>
                            <div class="text px-3 mx-2 br mx-0 w-30 d-none d-desk-block">
                                d-none d-desk-block
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="element"&gt;element&lt;/div&gt;
&lt;div class="element"&gt;element&lt;/div&gt;
&lt;div class="d-none d-desk-block"&gt;third-child&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <h3 class="mt-3">Changing properties:</h3>
                    <p>
                        A common practice is to make containers/parents have a <code class="inline">display: flex;</code> attached to them in larger screens. Below we are doing exactly that, the items are set to block from mobile up until tablet, then they become flex items, aligning horizontally.
                    </p>
                    <div class="column-demo mb-3">
                        <div class="br mb-3 c-white">
                            <div class="d-block d-desk-flex justify-content-between mb-3 t-center">
                                <div class="text my-2 my-desk-0 mr-desk-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text my-2 my-desk-0 mx-desk-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text my-2 my-desk-0 mx-desk-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">3</div>
                                <div class="text my-2 my-desk-0 mx-desk-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text my-2 my-desk-0 ml-desk-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="d-block d-desk-flex justify-content-between"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Variations -->
                <article class="section-scroll" id="variations">
                <h2 class="b-b1-light hash">Variations</h2>
<pre class="highlight mt-3"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-none"&gt;&lt;/div&gt;
&lt;div class="d-inline"&gt;&lt;/div&gt;
&lt;div class="d-inline-block"&gt;&lt;/div&gt;
&lt;div class="d-block"&gt;&lt;/div&gt;
&lt;div class="d-flex"&gt;&lt;/div&gt;
&lt;div class="d-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-table"&gt;&lt;/div&gt;
&lt;div class="d-table-row"&gt;&lt;/div&gt;
&lt;div class="d-table-cell"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-mob-none"&gt;&lt;/div&gt;
&lt;div class="d-mob-inline"&gt;&lt;/div&gt;
&lt;div class="d-mob-inline-block"&gt;&lt;/div&gt;
&lt;div class="d-mob-block"&gt;&lt;/div&gt;
&lt;div class="d-mob-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-table"&gt;&lt;/div&gt;
&lt;div class="d-mob-table-row"&gt;&lt;/div&gt;
&lt;div class="d-mob-table-cell"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-tab-none"&gt;&lt;/div&gt;
&lt;div class="d-tab-inline"&gt;&lt;/div&gt;
&lt;div class="d-tab-inline-block"&gt;&lt;/div&gt;
&lt;div class="d-tab-block"&gt;&lt;/div&gt;
&lt;div class="d-tab-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-table"&gt;&lt;/div&gt;
&lt;div class="d-tab-table-row"&gt;&lt;/div&gt;
&lt;div class="d-tab-table-cell"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-desk-none"&gt;&lt;/div&gt;
&lt;div class="d-desk-inline"&gt;&lt;/div&gt;
&lt;div class="d-desk-inline-block"&gt;&lt;/div&gt;
&lt;div class="d-desk-block"&gt;&lt;/div&gt;
&lt;div class="d-desk-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-table"&gt;&lt;/div&gt;
&lt;div class="d-desk-table-row"&gt;&lt;/div&gt;
&lt;div class="d-desk-table-cell"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-hd-none"&gt;&lt;/div&gt;
&lt;div class="d-hd-inline"&gt;&lt;/div&gt;
&lt;div class="d-hd-inline-block"&gt;&lt;/div&gt;
&lt;div class="d-hd-block"&gt;&lt;/div&gt;
&lt;div class="d-hd-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-table"&gt;&lt;/div&gt;
&lt;div class="d-hd-table-row"&gt;&lt;/div&gt;
&lt;div class="d-hd-table-cell"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>