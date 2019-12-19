<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
</script>

<style>

body {
    margin: 0;
    padding: 0;

    background: #white;
    color: #333;
    font-family: "Avenir Next", "Avenir", sans-serif;
}

#fullbody {
    background: #eaeaea;
}

/* HAMBURGER MENU */
#menuToggle {
    display: block;
    position: relative;
    top: 50px;
    left: 50px;

    z-index: 1;

    -webkit-user-select: none;
    user-select: none;
}

#menuToggle a {
    text-decoration: none;
    color: #232323;

    transition: color 0.3s ease;
}

#menuToggle a:hover {
    color: tomato;
}


#menuToggle input {
    display: block;
    width: 40px;
    height: 32px;
    position: absolute;
    top: -7px;
    left: -5px;

    cursor: pointer;

    opacity: 0;
    /* hide this */
    z-index: 2;
    /* and place it over the hamburger */

    -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span {
    display: block;
    width: 33px;
    height: 4px;
    margin-bottom: 5px;
    position: relative;

    background: #cdcdcd;
    border-radius: 3px;

    z-index: 1;

    transform-origin: 4px 0px;

    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
        background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
        opacity 0.55s ease;
}

#menuToggle span:first-child {
    transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2) {
    transform-origin: 0% 100%;
}

/*
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked~span {
    opacity: 1;
    background: #232323;
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu {
    position: absolute;
    width: 300px;
    margin: -100px 0 0 -50px;
    padding: 50px;
    padding-top: 125px;

    background: #ededed;
    list-style-type: none;
    -webkit-font-smoothing: antialiased;

    transform-origin: 0% 0%;
    transform: translate(-100%, 0);

    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
}

#menu li {
    padding: 10px 0;
    font-size: 16px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked~ul {
    transform: none;
}
</style>
