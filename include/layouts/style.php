<style>
    * {
        margin: 0px;
        padding: 0px;

    }

    body {
        height: 100vh;
    }



    /* header */
    .bg-style {
        background-color: #06283D;
        height: auto;
    }

    .bg-style .header-name {
        text-decoration: none;
        color: white;
    }

    /* content body */
    .main-row {
        width: 100%;
        margin-top: 50px;
    }



    /* welcome note */
    .welcome-note {
        color: rgb(138, 138, 138);
        text-align: center;
    }


    /* back arrow */
    .back-arrow {
        height: 20px;
        filter: brightness(70%);
        display: none;
    }

    .back-arrow:hover {
        height: 48px;
        filter: brightness(90%);
    }


    /* hover effects */
    .hoverEffectGrow {
        transition: all 2s ease-in-out;
    }

    .hoverEffectGrow:hover {
        margin-top: 20px;
        font-size: 20px;
    }

    /* animate when page load */
    .animateWhenLoad {
        animation: pageload 1s;
    }

    @keyframes pageload {
        0% {

            filter: blur(20px);
        }

        100% {
            filter: blur(0px);
        }

    }




    .contentVisi::after {
        content: '';
        position: absolute;
        height: 15px;
        width: 15px;
        background-color: #2aea3d;
        margin-left: -3px;
        margin-top: -8px;
        border-radius: 100%;
    }

    .contentNonVisi::after {
        content: '';
        position: absolute;
        height: 15px;
        width: 15px;
        background-color: red;
        margin-left: -3px;
        margin-top: -8px;
        border-radius: 100%;
    }

    .logout {
        cursor: pointer;
    }

    .alert-box {
        position: absolute;
        right:40%;
        top: 50px;
        z-index: 100;
        width:20%;
        text-align: center;
        animation: alert 3s;
        visibility: hidden;
    }

    @keyframes alert {
        0% {
            visibility: visible;
            top: 0px;
            opacity: 0.5;
          
        }

        100% {
            visibility: visible;
            top: 50px;
            opacity: 1;
        }

    }


</style>