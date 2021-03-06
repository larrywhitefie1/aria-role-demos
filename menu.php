<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARIA Menubar Role Example</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/menubar.css" />
    
</head>

<body>
    <?php include("includes/documentation-header.php"); ?>

    <main>


        <h1>ARIA Menubar Role Example</h1>
        <aside class="notes">
            <h2>Notes</h2>

            <ul>
                <li>This example is from the
                    <a href="https://www.w3.org/TR/2017/NOTE-wai-aria-practices-1.1-20171214/examples/menubar/menubar-1/menubar-1.html">Navigation Menubar Example</a>
                </li>
                <li>The original code has visual design bugs that should be fixed.</li>
            </ul>

        </aside>

        <h2>Live Example</h2>

        <nav aria-label="Mythical University">
            <ul id="menubar1" role="menubar" aria-label="Mythical University">
                <li>
                    <a role="menuitem" aria-haspopup="true" aria-expanded="false" href="#" tabindex="0">
                        About
                    </a>
                    <ul role="menu" aria-label="About">
                        <li role="none">
                            <a role="menuitem" href="mb-about.html#overview" tabindex="-1">
                                Overview
                            </a>
                        </li>
                        <li role="none">
                            <a role="menuitem" href="mb-about.html#admin" tabindex="-1">
                                Administration
                            </a>
                        </li>
                        <li role="none">
                            <a id="menubar113" role="menuitem" href="#" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                Facts
                            </a>
                            <ul role="menu" aria-label="Facts">
                                <li role="none">
                                    <a role="menuitem" href="mb-about.html#facts" tabindex="-1">
                                        History
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-about.html#facts" tabindex="-1">
                                        Current Statistics
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-about.html#facts" tabindex="-1">
                                        Awards
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a role="menuitem" href="#" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                Campus Tours
                            </a>
                            <ul role="menu" aria-label="Campus Tours">
                                <li role="none">
                                    <a role="menuitem" href="mb-about.html#tours" tabindex="-1">
                                        For prospective students
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-about.html#tours" tabindex="-1">
                                        For alumni
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-about.html#tours" tabindex="-1">
                                        For visitors
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a role="menuitem" aria-haspopup="true" aria-expanded="false" href="#" tabindex="-1">
                        Admissions
                    </a>
                    <ul role="menu" aria-label="Admissions">
                        <li role="none">
                            <a role="menuitem" href="mb-admissions.html#apply" tabindex="-1">
                                Apply
                            </a>
                        </li>
                        <li role="none">
                            <a role="menuitem" href="#" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                Tuition
                            </a>
                            <ul role="menu" aria-label="Tuition Information">
                                <li role="none">
                                    <a role="menuitem" href="mb-admissions.html#tuition" tabindex="-1">
                                        Undergraduate
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-admissions.html#tuition" tabindex="-1">
                                        Graduate
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-admissions.html#tuition" tabindex="-1">
                                        Professional Schools
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li role="none">
                            <a role="menuitem" href="mb-admissions.html#signup" tabindex="-1">
                                Sign Up
                            </a>
                        </li>
                        <li role="separator">
                            <li role="none">
                                <a role="menuitem" href="mb-admissions.html#visit" tabindex="-1">
                                    Visit
                                </a>
                            </li>
                            <li role="none">
                                <a role="menuitem" href="mb-admissions.html#photo" tabindex="-1">
                                    Photo Tour
                                </a>
                            </li>
                            <li role="none">
                                <a role="menuitem" href="mb-admissions.html#connect" tabindex="-1">
                                    Connect
                                </a>
                            </li>
                    </ul>
                    </li>
                    <li>
                        <a role="menuitem" aria-haspopup="true" aria-expanded="false" href="#" tabindex="-1">
                            Academics
                        </a>
                        <ul role="menu" aria-label="Academics">
                            <li role="none">
                                <a role="menuitem" href="mb-academics.html#colleges" tabindex="-1">
                                    Colleges & Schools
                                </a>
                            </li>
                            <li role="none">
                                <a role="menuitem" href="mb-academics.html#programs" tabindex="-1">
                                    Programs of Study
                                </a>
                            </li>
                            <li role="none">
                                <a role="menuitem" href="mb-academics.html#honors" tabindex="-1">
                                    Honors Programs
                                </a>
                            </li>
                            <li role="none">
                                <a role="menuitem" href="mb-academics.html#online" tabindex="-1">
                                    Online Courses
                                </a>
                            </li>
                            <li role="separator">
                                <li role="none">
                                    <a role="menuitem" href="mb-academics.html#explorer" tabindex="-1">
                                        Course Explorer
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-academics.html#register" tabindex="-1">
                                        Register for Class
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-academics.html#academic" tabindex="-1">
                                        Academic Calendar
                                    </a>
                                </li>
                                <li role="none">
                                    <a role="menuitem" href="mb-academics.html#tanscripts" tabindex="-1">
                                        Transscripts
                                    </a>
                                </li>
                        </ul>
                        </li>
            </ul>
        </nav>
    </main>
    <script src="js/shared/MenubarItemLinks.js"></script>
    <script src="js/shared/MenubarLinks.js"></script>
    <script src="js/shared/PopupMenuItemLinks.js"></script>
    <script src="js/shared/PopupMenuLinks.js"></script>

    <script type="text/javascript">

        var menubar = new Menubar(document.getElementById('menubar1'));
        menubar.init();

    </script>


    <script src="js/menubar.js"></script>
</body>

</html>