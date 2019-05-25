<?php

//Page variables
$pageData = [
    'pageTitle' => 'Table',
    'pageDescription' => 'Forget boring styled tables and use our table component to bring rows & columns to life.',
    'activePage' => 'table',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'striped' => 'Striped',
    'hover' => 'Hover',
    'scroll' => 'Scroll',
    'icon' => 'Icon',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content table-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Tables should be prefixed with the <code class="inline">table</code> class. This will give padding to the table and define borders, as well as making the borders collapsible. 
                        <br><strong>Note:</strong> You can have any combination of the class below.
                    </p>
                    <table class="table my-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tim Davis</td>
                                <td>England</td>
                                <td>London</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chaem Choi</td>
                                <td>Thailand</td>
                                <td>Bangkok</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jose Mari</td>
                                <td>Philippines</td>
                                <td>Cebu</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea Scott</td>
                                <td>Hungary</td>
                                <td>Budapest</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Stephanie Jones</td>
                                <td>Australia</td>
                                <td>Queensland</td>
                            </tr>
                        </tbody>
                    </table>
                    <pre class="highlight"><code class="html">&lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Country&lt;/th&gt;
            &lt;th&gt;City&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Tim Davis&lt;/td&gt;
            &lt;td&gt;England&lt;/td&gt;
            &lt;td&gt;London&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Chaem Choi&lt;/td&gt;
            &lt;td&gt;Thailand&lt;/td&gt;
            &lt;td&gt;Bangkok&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Jose Mari&lt;/td&gt;
            &lt;td&gt;Philippines&lt;/td&gt;
            &lt;td&gt;Cebu&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;4&lt;/td&gt;
            &lt;td&gt;Andrea Scott&lt;/td&gt;
            &lt;td&gt;Hungary&lt;/td&gt;
            &lt;td&gt;Budapest&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;5&lt;/td&gt;
            &lt;td&gt;Stephanie Jones&lt;/td&gt;
            &lt;td&gt;Australia&lt;/td&gt;
            &lt;td&gt;Queensland&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Striped -->
                <article class="section-scroll" id="striped">
                    <h2 class="b-b-light hash">Striped</h2>
                    <p class="secondary-lead">
                        To make every other table row a striped color, simply add the <code class="inline">table-striped</code> alongside the table, see below.
                    </p>
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                    <table class="table table-striped my-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tim Davis</td>
                                <td>England</td>
                                <td>London</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chaem Choi</td>
                                <td>Thailand</td>
                                <td>Bangkok</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jose Mari</td>
                                <td>Philippines</td>
                                <td>Cebu</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea Scott</td>
                                <td>Hungary</td>
                                <td>Budapest</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Stephanie Jones</td>
                                <td>Australia</td>
                                <td>Queensland</td>
                            </tr>
                        </tbody>
                    </table>
                    <pre class="highlight"><code class="html">&lt;table class=&quot;table <strong>table-striped</strong>&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Country&lt;/th&gt;
            &lt;th&gt;City&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Tim Davis&lt;/td&gt;
            &lt;td&gt;England&lt;/td&gt;
            &lt;td&gt;London&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Chaem Choi&lt;/td&gt;
            &lt;td&gt;Thailand&lt;/td&gt;
            &lt;td&gt;Bangkok&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Jose Mari&lt;/td&gt;
            &lt;td&gt;Philippines&lt;/td&gt;
            &lt;td&gt;Cebu&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;4&lt;/td&gt;
            &lt;td&gt;Andrea Scott&lt;/td&gt;
            &lt;td&gt;Hungary&lt;/td&gt;
            &lt;td&gt;Budapest&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;5&lt;/td&gt;
            &lt;td&gt;Stephanie Jones&lt;/td&gt;
            &lt;td&gt;Australia&lt;/td&gt;
            &lt;td&gt;Queensland&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Hover -->
                <article class="section-scroll" id="hover">
                    <h2 class="b-b-light hash">Hover</h2>
                    <p class="secondary-lead">
                        To create a hover effect on the table rows, just add the <code class="inline">table-hover</code> class alongside the table, see below.
                    </p>
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                   </td>
                   <table class="table table-hover my-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tim Davis</td>
                                <td>England</td>
                                <td>London</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chaem Choi</td>
                                <td>Thailand</td>
                                <td>Bangkok</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jose Mari</td>
                                <td>Philippines</td>
                                <td>Cebu</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea Scott</td>
                                <td>Hungary</td>
                                <td>Budapest</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Stephanie Jones</td>
                                <td>Australia</td>
                                <td>Queensland</td>
                            </tr>
                        </tbody>
                    </table>
                    <pre class="highlight"><code class="html">&lt;table class=&quot;table <strong>table-hover</strong>&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Country&lt;/th&gt;
            &lt;th&gt;City&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Tim Davis&lt;/td&gt;
            &lt;td&gt;England&lt;/td&gt;
            &lt;td&gt;London&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Chaem Choi&lt;/td&gt;
            &lt;td&gt;Thailand&lt;/td&gt;
            &lt;td&gt;Bangkok&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Jose Mari&lt;/td&gt;
            &lt;td&gt;Philippines&lt;/td&gt;
            &lt;td&gt;Cebu&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;4&lt;/td&gt;
            &lt;td&gt;Andrea Scott&lt;/td&gt;
            &lt;td&gt;Hungary&lt;/td&gt;
            &lt;td&gt;Budapest&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;5&lt;/td&gt;
            &lt;td&gt;Stephanie Jones&lt;/td&gt;
            &lt;td&gt;Australia&lt;/td&gt;
            &lt;td&gt;Queensland&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
            
                </article>

                <!-- Scroll -->
                <article class="section-scroll" id="scroll">
                    <h2 class="b-b-light hash">Scroll</h2>
                    <p class="secondary-lead">
                        In order for the table to become responsive, or have an <code class="inline">overflow-x: auto;</code> property, wrap the table inside a <code class="inline">div</code> and add the <code class="inline">table-scroll</code> class.
                        <br>This will prevent text wrapping and enable a scroll behaviour, go ahead and resize the screen.
                    </p>
                    <div class="table-scroll my-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Zip</th>
                                    <th>Subscribed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tim Davis</td>
                                    <td>England</td>
                                    <td>London</td>
                                    <td>TR4 2YT</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chaem Choi</td>
                                    <td>Thailand</td>
                                    <td>Bangkok</td>
                                    <td>10520</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jose Mari</td>
                                    <td>Philippines</td>
                                    <td>Cebu</td>
                                    <td>24502</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andrea Scott</td>
                                    <td>Hungary</td>
                                    <td>Budapest</td>
                                    <td>423001</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Stephanie Jones</td>
                                    <td>Australia</td>
                                    <td>Queensland</td>
                                    <td>292125</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <pre class="highlight"><code class="html"><strong>&lt;div class=&quot;table-scroll&quot;&gt;</strong>
    &lt;table class=&quot;table table-hover&quot;&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;#&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;City&lt;/th&gt;
                &lt;th&gt;Zip&lt;/th&gt;
                &lt;th&gt;Subscribed&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;1&lt;/td&gt;
                &lt;td&gt;Tim Davis&lt;/td&gt;
                &lt;td&gt;England&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;TR4 2YT&lt;/td&gt;
                &lt;td&gt;Yes&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;2&lt;/td&gt;
                &lt;td&gt;Chaem Choi&lt;/td&gt;
                &lt;td&gt;Thailand&lt;/td&gt;
                &lt;td&gt;Bangkok&lt;/td&gt;
                &lt;td&gt;10520&lt;/td&gt;
                &lt;td&gt;Yes&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;3&lt;/td&gt;
                &lt;td&gt;Jose Mari&lt;/td&gt;
                &lt;td&gt;Philippines&lt;/td&gt;
                &lt;td&gt;Cebu&lt;/td&gt;
                &lt;td&gt;24502&lt;/td&gt;
                &lt;td&gt;No&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;4&lt;/td&gt;
                &lt;td&gt;Andrea Scott&lt;/td&gt;
                &lt;td&gt;Hungary&lt;/td&gt;
                &lt;td&gt;Budapest&lt;/td&gt;
                &lt;td&gt;423001&lt;/td&gt;
                &lt;td&gt;No&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;5&lt;/td&gt;
                &lt;td&gt;Stephanie Jones&lt;/td&gt;
                &lt;td&gt;Australia&lt;/td&gt;
                &lt;td&gt;Queensland&lt;/td&gt;
                &lt;td&gt;292125&lt;/td&gt;
                &lt;td&gt;Yes&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
<strong>&lt;/div&gt;</strong></code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Icon -->
                <article class="section-scroll" id="icon">
                    <h2 class="b-b-light hash">Icon</h2>
                    <p class="secondary-lead">
                        The possibilities are endless with the table component, you can use them in conjunction with any icons, see below for the full works.
                    </p>
                    <div class="table-scroll my-3">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Zip</th>
                                    <th class="center-text">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tim Davis</td>
                                    <td>England</td>
                                    <td>London</td>
                                    <td>TR4 2YT</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chaem Choi</td>
                                    <td>Thailand</td>
                                    <td>Bangkok</td>
                                    <td>10520</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jose Mari</td>
                                    <td>Philippines</td>
                                    <td>Cebu</td>
                                    <td>24502</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andrea Scott</td>
                                    <td>Hungary</td>
                                    <td>Budapest</td>
                                    <td>423001</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Stephanie Jones</td>
                                    <td>Australia</td>
                                    <td>Queensland</td>
                                    <td>292125</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;table-scroll&quot;&gt;
    &lt;table class=&quot;table table-striped table-hover&quot;&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;#&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;City&lt;/th&gt;
                &lt;th&gt;Zip&lt;/th&gt;
                &lt;th class=&quot;center-text&quot;&gt;Actions&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;1&lt;/td&gt;
                &lt;td&gt;Tim Davis&lt;/td&gt;
                &lt;td&gt;England&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;TR4 2YT&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class=&quot;d-flex flex-nowrap justify-content-end&quot;&gt;
                        &lt;i class=&quot;fas fa-user-cog c-info mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-pencil-alt c-success mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-times c-danger&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;2&lt;/td&gt;
                &lt;td&gt;Chaem Choi&lt;/td&gt;
                &lt;td&gt;Thailand&lt;/td&gt;
                &lt;td&gt;Bangkok&lt;/td&gt;
                &lt;td&gt;10520&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class=&quot;d-flex flex-nowrap justify-content-end&quot;&gt;
                        &lt;i class=&quot;fas fa-user-cog c-info mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-pencil-alt c-success mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-times c-danger&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;3&lt;/td&gt;
                &lt;td&gt;Jose Mari&lt;/td&gt;
                &lt;td&gt;Philippines&lt;/td&gt;
                &lt;td&gt;Cebu&lt;/td&gt;
                &lt;td&gt;24502&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class=&quot;d-flex flex-nowrap justify-content-end&quot;&gt;
                        &lt;i class=&quot;fas fa-user-cog c-info mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-pencil-alt c-success mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-times c-danger&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;4&lt;/td&gt;
                &lt;td&gt;Andrea Scott&lt;/td&gt;
                &lt;td&gt;Hungary&lt;/td&gt;
                &lt;td&gt;Budapest&lt;/td&gt;
                &lt;td&gt;423001&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class=&quot;d-flex flex-nowrap justify-content-end&quot;&gt;
                        &lt;i class=&quot;fas fa-user-cog c-info mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-pencil-alt c-success mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-times c-danger&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;5&lt;/td&gt;
                &lt;td&gt;Stephanie Jones&lt;/td&gt;
                &lt;td&gt;Australia&lt;/td&gt;
                &lt;td&gt;Queensland&lt;/td&gt;
                &lt;td&gt;292125&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class=&quot;d-flex flex-nowrap justify-content-end&quot;&gt;
                        &lt;i class=&quot;fas fa-user-cog c-info mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-pencil-alt c-success mr-1&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;fas fa-times c-danger&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>

<?php function scripts()
{?>
<script>
//!Any page relevant JS scripts to go in here.
</script>
<?php }?>