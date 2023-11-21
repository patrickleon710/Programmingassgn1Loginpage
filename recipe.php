<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Recipe</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@200&display=swap');

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        h1 {
            color: blue;
            font-size: 3rem;
            text-shadow: 2px 2px 1px black;
            text-transform: uppercase;
        }

        h2 {
            text-decoration: underline;
        }

        h3 {
            text-decoration: underline;
        }

        #two h3 {
            text-decoration: underline;
            text-align: center;
        }

        main, ul {
            list-style-position: inside;
            display: flex;
            flex-flow: column nowrap;
            font-weight: 500;
            text-align: left;
        }

        .links li {
            list-style-type: lower-roman;
        }

        a {
            color: rgb(204, 51, 31);
            font-size: 20px;
            font-weight: 500;
        }

        a:hover {
            background: #6dc4d8;
            border-radius: 5px;
            padding: 5px;
        }

        .image {
            display: flex;
            flex-flow: row;
            justify-content: space-between;
            z-index: 1;
        }
        
        img {
            border: 2px solid black;
            border-radius: 5px;
            z-index: -1;
        }

        p {
            font-size: larger;
        }

        legend {
            font-size: 2em;
            
        }
        @media screen and (max-width: 640px) {
            .image{
                display: flex;
                flex-flow: column nowrap;
            }
        }
        @media screen and (min-width: 640px) {
            img{
                width: 350px;
            }
        }
    </style>
</head>
<body style="
        align-items: center;
        background: linear-gradient(#2193b0, #a1e1f0) ;
        display: flex;
        min-height: 100vh;
        flex-flow: column nowrap; 
        font-family: lexend;
        margin: 2em;
        ">
    <header>
        <h1 id="top">My favourite recipe🔥</h1>
        <hr>
        <?php
            include_once 'header.php';
        ?>
        <ul class="links">
            <li><a href="#ingredients">Ingredients</a></li>
            <li><a href="#method">Method</a></li>
        </ul>
    </header>
    <main>
        <h2>Rice and Beef Stew for two</h2>
        <h3 id="ingredients">Ingredients</h3>
        <div class="image">
            <ul>
                <li>1 cup, rice</li>
                <li>2 cups, water</li>
                <li>1/2 kg, beef</li>
                <li>2 tbsp, Cooking oil</li>
                <li>1 onion</li>
                <li>2 tomatoes</li>            
                <li>1, Bell pepper</li>            
                <li>2, Crushed Garlic cloves</li>            
                <li>1/2 inch, Crushed ginger</li>            
                <li>Salt to taste</li>            
                <li>1 tbsp, soy sauce</li>  
            </ul>
            <img src="https://img-global.cpcdn.com/recipes/2c797f657518a93b/680x482cq70/beef-stew-and-white-rice-recipe-main-photo.jpg" alt="rice-beef-stew-image" >
        </div>
        <div id="two">
            <h3 id="method">Method</h3>
            <ol>
                <li>Clean the rice. Add two cups of water in a sufuria, add salt to taste and a tablespoon of cooking oil. Boil under medium heat.</li>
                <li>Add in the rice and cook. Cut the beef into small pieces. Finely chop the bell pepper onions and tomatoes.</li>
                <li>Add a table spoon of cooking oil in a sufuria and fry the onions. Add the crushed ginger and garlic. Add the beef and stir.</li>
                <li>Add in the bell pepper, tomato and stir.</li>
                <li>Add in a cup of water salt and the soy sauce. Allow to boil.</li>
                <li>Serve hot with the rice.</li>
            </ol>
        </div>
    </main>
    <footer>
        <p>Recipe by &copy; <strong>Patrick Leon.</strong></p>

        <form action="">
            <fieldset>
                <legend>Feedback</legend>
                <label for="comment"><strong><em>Talk to us: </em></strong></label>
                <input id="comment" name="comment" type="text" placeholder="leave a comment" value="comment">
                <button type="submit" value="submit">Submit</button>
            </fieldset>
        </form>
        <p><a href="#top">Back to top ⬆️</a></p>
        <hr>
    </footer>
</body>
</html>