<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .navBar {
            background-color: #005e7c;
        }
        .buttonsColor {
            background-color: #1ca2bb;
        }
        .detailsColor {
            background-color: #005792;
        }
        .borderColor {
            border-color: #f7b633;
        }
    </style>
</head>
<body class="font-serif">
    <nav class="p-4 sm:flex justify-end text-2xl navBar text-white">
        <h1>Juan Dela Cruz</h1>
    </nav>

    <div class="container mx-auto p-4 sm:p-8">
        <div class="overflow-x-auto">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-1">
                    <table class="min-w-full table-auto border-4 borderColor">
                        <tbody>
                            <tr>
                                <td class="px-4 text-lg sm:px-6 py-4 whitespace-no-wrap">
                                    <fieldset>
                                        <div class="py-2">
                                            <h1>Name: Juan Dela Cruz</h1>
                                        </div>
                                        <div id="userOptions">
                                            <?php
                                            $userOpt = ["Home", "Assignments", "Quiz", "About"];
                                            foreach ($userOpt as $user) {
                                                echo '<button class="flex w-full buttonsColor hover:bg-blue-800 text-white py-2 px-4 my-2">' . $user . '</button>';
                                            }
                                            ?>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Web Programming Section -->
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-1">
                    <table class="min-w-full table-auto border-4 borderColor">
                        <tbody>
                            <tr>
                                <td class="px-4 text-lg sm:px-6 py-4 whitespace-no-wrap">
                                    <fieldset>
                                        <div class="py-2 px-4 detailsColor text-white">
                                            <h1>Web Programming</h1>
                                        </div>
                                        <div id="webOptions">
                                            <?php
                                            $webOpt = ["HTML, CSS, and JavaScript", "PHP", "ASP.NET"];
                                            foreach ($webOpt as $web) {
                                                echo '<button class="flex w-full buttonsColor hover:bg-blue-800 text-white py-2 px-2 my-2">' . $web . '</button>';
                                            }
                                            ?>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-1">
                    <table class="min-w-full table-auto border-4 borderColor">
                        <tbody>
                            <tr>
                                <td class="px-4 text-lg sm:px-6 py-4 whitespace-no-wrap">
                                    <fieldset>
                                        <div class="py-2 px-4 detailsColor text-white">
                                            <h1>Mobile Programming</h1>
                                        </div>
                                        <div id="mobileOptions">
                                            <?php
                                            $mobileOpt = ["Android", "iOS", "Windows"];
                                            foreach ($mobileOpt as $mobile) {
                                                echo '<button class="flex w-full buttonsColor hover:bg-blue-800 text-white py-2 px-2 my-2">' . $mobile . '</button>';
                                            }
                                            ?>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-1">
                    <table class="min-w-full table-auto border-4 borderColor">
                        
                        <tbody>
                            <tr>
                                <td class="px-4 text-lg sm:px-6 py-4 whitespace-no-wrap">
                                    <fieldset>
                                        <div class="py-2 px-4 detailsColor text-white">
                                            <h1>Desktop Programming</h1>
                                        </div>
                                        <div id="desktopOptions">
                                            <?php
                                            $desktopOpt = ["Java", "C#", "Python"];
                                            foreach ($desktopOpt as $desktop) {
                                                echo '<button class="flex w-full buttonsColor hover:bg-blue-800 text-white py-2 px-2 my-2">' . $desktop . '</button>';
                                            }
                                            ?>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
