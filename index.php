<DOCTYPE html>

    <?php
    /**
     * Created by PhpStorm.
     * User: hm
     * Date: 7/13/2020
     * Time: 8:53 AM
     */

    ?>
    <html lang="en">
    <head>
        <title>Url Generator - Bad Tools</title>
        <link rel="stylesheet" href="../styles/style.css"/>
        <link rel="stylesheet" href="styles.css"/>
        <script type="text/javascript">
            function decideLeading(isChecked) {
                const leading = document.getElementById("leading");
                const leading2 = document.getElementById("leading2");
                if (isChecked.checked) {
                    leading.disabled = false;
                    leading2.disabled = false;
                }
                else {
                    leading.disabled = true;
                    leading2.disabled = true;
                }
            }
        </script>

    </head>
    <body>
    <section id="main">
        <section id="header">
            <section id="logo">
                <a href="https://errorworld.in/"></a>
            </section>
        </section>


        <section id="main_body">
            <form action="generate.php" method="post">
                <section id="urlGenForm">
                    <label for="url" style="float: left; margin-top: 1%">Main Url</label>
                    <input id="url" name="mainUrl" class="MainUrlBox" value="https://example.com/" required="required" type="text"/>
                </section>

                <section id="parm">
                    <section style="float: left; margin-top: 6%;"><label for="parm">Start/End</label></section>
                    <section style="display: inline-block">
                        <section id="parmstart">
                            <input value="1" required="required" name="parmStart" type="text" class="MainUrlBox"/>
                        </section>
                        <section id="parmend">
                            <input value="50" required="required" name="parmEnd" type="text" class="MainUrlBox"/>
                        </section>
                    </section>
                </section>

                <section id="extraUrl">
                    <label for="extUrl"></label><input name="extraUrl" type="text" value="ExtraURL" class="MainUrlBox extraUrl"/>
                </section>

                <section id="CheckBox">
                        <input type="checkbox" class="checkBox" name="isLeadingChar" id="isChecked" onclick="decideLeading(this)"/>
                        <label for="CheckBox">Leading Char</label>
                </section>

                <section id="CharLead">
                    <section id="charfield">
                        <label for="leading">Char</label>
                        <input type="text" name="leadingChar" id="leading" class="MainUrlBox extraUrl" disabled="disabled"/>
                    </section>
                    <section id="count">
                        <label for="leading2">Count</label>
                        <input type="text" name="leadCount" id="leading2" class="MainUrlBox extraUrl" disabled="disabled"/>
                    </section>
                </section>

                <section id="start">
                    <button class="start">Start</button>
                </section>
            </form>
        </section>
    </section>
    </body>
    </html>

