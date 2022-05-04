<!doctype html>
<html lang="en">

<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Robin Bonkaß">
    <meta name="generator" content="Visual Studio Code">

    <!-- title -->
    <title>Snax</title>
    <link rel="icon" href="./assets/images/profilbild_02.png" type="image/x-icon">

    <!-- CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style_main.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script_main.js"></script>

</head>

<body>
    <div id="body">

        <!-------------------------------->
        <!------- SVGs definieren -------->
        <!-------------------------------->

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

            <!-- for footer -->
            <symbol id="instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </symbol>
            <symbol id="twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </symbol>
            <symbol id="discord" viewBox="0 0 16 16">
                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z">
                </path>
            </symbol>
            <symbol id="tiktok" viewBox="0 0 16 16">
                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z">
                </path>
            </symbol>
            <symbol id="twitch" viewBox="0 0 16 16">
                <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z" />
                <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z" />
            </symbol>

            <!-- for header -->
            <symbol id="bootstrap" viewBox="0 0 118 94">
                <title>Bootstrap</title>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
                </path>
            </symbol>
            <symbol id="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
            </symbol>
            <symbol id="speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
            </symbol>
            <symbol id="table" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
            </symbol>
            <symbol id="people-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </symbol>
            <symbol id="grid" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            </symbol>

            <!-- for modals -->
            <symbol id="people" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </symbol>
            <symbol id="bookmark-star" viewBox="0 0 16 16">
                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z" />
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
            </symbol>
            <symbol id="grid-fill" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
            </symbol>
            <symbol id="film" viewBox="0 0 16 16">
                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
            </symbol>

            <!-- for hanging icons -->
            <symbol id="team" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </symbol>
            <symbol id="robot" viewBox="0 0 16 16">
                <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z" />
                <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z" />
            </symbol>
            <symbol id="gem" viewBox="0 0 16 16">
                <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
            </symbol>

            <!-- for light-dark Mode -->
            <symbol id="sun" viewBox="0 0 16 16">
                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </symbol>
            <symbol id="moon" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"></path>
            </symbol>
        </svg>

        <div style="padding-left: calc(100vw - 100%);">

            <!-------------------------------->
            <!------- Header ----------------->
            <!-------------------------------->

            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img src="./assets/images/profilbild_02.png" alt="Snax Logo" style="width:30px;border-radius: 5px;margin-right: 0.5cm;">
                        <span class="fs-4">Mitternachtssnax</span>
                    </a>

                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="./news.php" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="./games.html" class="nav-link">Games</a></li>
                        <li class="nav-item"><a href="./faq.html" class="nav-link">FAQs</a></li>
                        <li class="nav-item"><a href="./about.html" class="nav-link">Kontakt</a></li>

                        <li class="nav-item" id="mode_switch_li">
                            <a href="#" class="nav-link" id="mode_switch">
                                <svg class="bi" id="sun_icon" width="1em" height="1em">
                                    <use id="use_icon_change_color_mode" xlink:href="#sun" />
                                </svg>
                            </a>
                        </li>

                    </ul>
                </header>
            </div>

            <!-------------------------------->
            <!------- Modals ----------------->
            <!-------------------------------->

            <!-- Das Team -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-6 shadow">
                        <div class="modal-body p-5">

                            <div class="modal-header">
                                <h2 class="fw-bold mb-0">Das Team</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <ul class="d-grid gap-4 my-5 list-unstyled">
                                <li class="d-flex gap-4">
                                    <img src="./assets/images/ruben_2.jpg" alt="Robin" style="width:48px;height:48px;border-radius: 5px;margin-right: 0.2cm;margin-top: 0.2cm;">
                                    <div>
                                        <h5 class="mb-0">Robin</h5>
                                        Ich heiße Robin
                                    </div>
                                </li>
                                <li class="d-flex gap-4">
                                    <img src="./assets/images/cici.jpg" alt="Cici" style="width:48px;height:48px;border-radius: 5px;margin-right: 0.2cm;margin-top: 0.2cm;">
                                    <div>
                                        <h5 class="mb-0">Cici</h5>
                                        Ich bin cici, 20 Jahre alt und die coolste im Stream Team.
                                        Am Liebsten Male und Zeichne ich, wenn ich nicht grade Videospiele spiele.
                                    </div>
                                </li>
                                <li class="d-flex gap-4">
                                    <img src="./assets/images/gizzi.jpg" alt="Gizzi" style="width:48px;height:48px;border-radius: 5px;margin-right: 0.2cm;margin-top: 0.2cm;">
                                    <div>
                                        <h5 class="mb-0">Gizzi</h5>
                                        Ich heiße Gizem
                                    </div>
                                </li>
                                <li class="d-flex gap-4">
                                    <img src="./assets/images/simoms.jpg" alt="Simon" style="width:48px;height:48px;border-radius: 5px;margin-right: 0.2cm;margin-top: 0.2cm;">
                                    <div>
                                        <h5 class="mb-0">Simon</h5>
                                        Ich heiße Alexander
                                    </div>
                                </li>
                                <li class="d-flex gap-4">
                                    <img src="./assets/images/jojo.jpg" alt="Jojo" style="width:48px;height:48px;border-radius: 5px;margin-right: 0.2cm;margin-top: 0.2cm;">
                                    <div>
                                        <h5 class="mb-0">Jojo</h5>
                                        Ich heiße Jojo
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Was machen wir -->
            <div class="modal fade" id="what_do_we_do" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-6 shadow">
                        <div class="modal-body p-5">

                            <div class="modal-header">
                                <h2 class="fw-bold mb-0">Was machen wir?</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <ul class="d-grid gap-4 my-5 list-unstyled">
                                <li class="d-flex gap-4">
                                    <div>
                                        Wir sind eine kleine Community, die häufig im Dsicord Server chillt. Wir sind auch
                                        mehrmals die Woche live auf Twitch. Dort chatten wir und spielen Spiele.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Twitch -->
            <div class="modal fade" id="twitch_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-6 shadow">
                        <div class="modal-body p-5">

                            <div class="modal-header">
                                <h2 class="fw-bold mb-0">Twitch</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <ul class="d-grid gap-4 my-5 list-unstyled">
                                <li class="d-flex gap-4">
                                    <div>
                                        <h5 class="mb-0">Unser Content</h5>
                                        Wir machen viel just chatting und spielen Spiele, auf die wir grade Lust haben. Ihr
                                        könnt auch immer gerne Ideen geben, was wir für Spiele spielen sollen. Ab und zu
                                        machen wir auch Community Projekte, bei denen wir einfach zusammen ein bisschen
                                        talken oder zum Beispiel zusammen auf einem Minecraft Server spielen
                                    </div>
                                </li>
                                <li class="d-flex gap-4">
                                    <div>
                                        <h5 class="mb-0">Streamplan</h5>
                                        Wenn nicht grade Semesterferien sind und alle Urlaub machen, sind wir so 4 bis 5 Mal
                                        die Woche live. Wer von uns streamt ist immer unterschiedlich. Meistens wird Robin
                                        der Host sein und die anderen kommen immer spontan dazu. Offdays sind meistens
                                        Montag und Dienstag
                                    </div>
                                </li>
                            </ul>
                            <a class="btn btn-primary w-100" href="https://www.twitch.tv/mitternachtssnax" target="_blank" id="a" onmouseover="chimage('./assets/images/external_link.png')" onmouseout="chimage('./assets/images/external_link_white.png')">
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div id="b" class="col-lg-2 extern_link col-md-auto">
                                        </div>
                                        <div class="col-sm col-md-auto">
                                            Hier gehts zum Twitch Kanal!
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- discord (Bot commands) -->
            <div class="modal fade" id="discord_bot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-6 shadow">
                        <div class="modal-body p-5">

                            <div class="modal-header">
                                <h2 class="fw-bold mb-0">Discord Bot</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <ul class="d-grid gap-4 my-5 list-unstyled">
                                <li class="d-flex gap-4">
                                    <div>
                                        Auf unserem Community Discord Server ist ein Bot mit dem Namen <b>omega</b>. Es gibt
                                        einige Commands, mit denen ihr mit dem Bot interagieren könnt
                                    </div>
                                </li>
                                <li class="d-flex gap-4">
                                    <div>
                                        <h5 class="mb-0">Commands</h5>
                                        <p></p>
                                        <p>Mit <code>.help</code> bekommst du eine Übersicht über alle Commands, die du
                                            benutzen kannst</p>
                                        <p>Wenn du <code>.user &#060;mention user&#062;</code> schreibst, gibt omega dir
                                            Informationen über den getaggten User aus</p>
                                        <p>Durch
                                            <code>.abstimmung &#060;ja/ne&#062; &#060;ja/ne&#062; &#060;ja/ne&#062; &#060;deine Frage&#062;</code>
                                            erstellt dir omega eine Umfrage, auf die andere reagieren können
                                        </p>
                                        <p>Mit Hilfe von <code>.miesmuschel &#060;deine Frage&#062;?</code> antwortet omega
                                            dir auf deine Frage - die Antwort ist natürlich immer richtig ;)</p>
                                    </div>
                                </li>
                            </ul>
                            <a class="btn btn-primary w-100" href="https://discord.gg/PBwPuYyFXR" target="_blank" id="c" onmouseover="chimage2('./assets/images/external_link.png')" onmouseout="chimage2('./assets/images/external_link_white.png')">
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div id="d" class="col-lg-2 extern_link col-md-auto">
                                        </div>
                                        <div class="col-sm col-md-auto">
                                            Hier gehts zum Discord Server!
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-------------------------------->
            <!------- Content ---------------->
            <!-------------------------------->

            <!-- heading -->
            <h1 class="display-1" style="text-align: center;">Home</h1>
            <p class="lead" style="text-align: center;">Hier bekommt ihr erstmal einen Überblick</p>

            <!-- hanging icons -->
            <div class="container px-4 py-5" id="hanging-icons">
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#team" />
                            </svg>
                        </div>
                        <div>
                            <h2>Das Team</h2>
                            <p>Unser Team besteht aus Robin, Cici, Gizem, Simon und Jojo. Wir sind sehr gute Freunde und
                                hatten die Idee zusammen live zu streamen</p>
                            <button type="button" class="btn btn-primary" id="team_icon_button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                Mehr Informationen
                            </button>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#gem" />
                            </svg>
                        </div>
                        <div>
                            <h2>Was machen wir?</h2>
                            <p>Hauptsächlich versuchen wir eine kleine familiäre Community aufzubauen und regelmäßig auf
                                Twitch zu streamen. Interaktion mit den Zuschauern ist uns sehr wichtig</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#what_do_we_do">
                                Mehr Informationen
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#twitch" />
                            </svg>
                        </div>
                        <div>
                            <h2>Twitch</h2>
                            <p>Wir steamen mehr oder weniger regelmäßig auf Twitch. Dort machen wir viel variety Content.
                                Dazu zählt zum Beispiel just chatting und Spiele spielen</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twitch_modal">
                                Mehr Informationen
                            </button>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#robot" />
                            </svg>
                        </div>
                        <div>
                            <h2>Discord Bot</h2>
                            <p>Auf unserem Community Discord Server haben wir einen selbst programmierten Discord Bot mit
                                vielen coolen Features. Um diese zu sehen schreibt einfach <em>.help</em> in einen Channel
                                im Server</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#discord_bot">
                                Mehr Informationen
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- news -->
            <hr style="width:84%; margin: auto;"">

            <section class=" py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">News</h1>
                    <p class="lead text-muted">Hier werdet ihr immer informiert, wenn wir neue Projekte machen, Community
                        Events veranstalten, neue Commands zum Discord Bot hinzufügen und vieles mehr</p>
                    <p>
                        <a href="./news.php" class="btn btn-primary my-2">alle anzeigen</a>
                    </p>
                </div>
            </div>
            </section>

            <!-- nur 3 News auf Main Page (alle anderen auf eigener Seite anzeigen) -->

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                        <?php
                        $file = './assets/json/news.json';
                        // put the content of the file in a variable
                        $data = file_get_contents($file);
                        // JSON decode
                        $obj = json_decode($data);

                        for ($i = 0; $i < 3; $i++) {
                            echo '<div class="col">';
                            echo '<div class="card shadow-sm">';
                            echo '<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">';
                            echo '<defs>';
                            echo '<pattern id="imgpattern" x="0" y="0" width="1" height="1" viewBox="0 0 2400 960" preserveAspectRatio="xMidYMid slice">';
                            echo '<image width="2400" height="960" xlink:href="./assets/images/twitch_banner_02.png"/>';
                            echo '</pattern>';
                            echo '</defs>';
                            echo '<rect width="100%" height="100%" fill="url(#imgpattern)" />';
                            echo '<rect x="10%" y="30%" rx="5" ry="5" width="80%" height="40%" style="fill:rgba(0, 0, 0, 0.425);" />';
                            echo '<text x="50%" y="50%" fill="#eceeef" dy=".3em">';
                            echo $obj[$i]->title;
                            echo '</text></svg><div class="card-body"><p class="card-text">';
                            echo $obj[$i]->content;
                            echo '</p>';
                            echo '<div class="d-flex justify-content-between align-items-center">';
                            echo '<div class="btn-group">';
                            echo '<button type="button" class="btn btn-sm btn-outline-secondary';
                            if ($obj[$i]->link == "disabled") {
                                echo 'disabled"';
                            } else {
                                echo '" ';
                                echo 'onClick="document.location=\'';
                                echo $obj[$i]->link;
                                echo '\'"';
                            }
                            echo '>mehr infos</button>';
                            echo '<button type="button" class="btn btn-sm btn-outline-secondary" onClick="document.location=\'./news.php\'">alle anzeigen</button>';
                            echo '</div>';
                            echo '<small class="text-muted">';
                            echo $obj[$i]->date;
                            echo '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>

                    </div>
                </div>
            </div>

            <!-------------------------------->
            <!------- Footer ----------------->
            <!-------------------------------->

            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="#" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <img src="./assets/images/profilbild_02.png" alt="Snax Logo" style="width:30px;border-radius: 5px;">
                        </a>
                        <span class="text-muted">&copy; 2021 Snax Team</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-muted" href="https://www.twitch.tv/mitternachtssnax" target="_blank">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitch" />
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="https://discord.gg/4nBdMhHJPU" target="_blank">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#discord" />
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="https://twitter.com/m_snaxx" target="_blank">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="https://www.instagram.com/mitternachtssnax/" target="_blank">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="https://www.tiktok.com/@mitternachtssnax" target="_blank">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#tiktok" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>

    </div>
</body>

</html>