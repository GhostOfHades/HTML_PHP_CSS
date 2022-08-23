<!DOCTYPE html>
<html lang = "en">
    <head>
        <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="appearance.css">    
        <title>
            Animal sightings form
        </title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="script.js" ></script>
    </head>
    <div id="page">
        <header>
            <h1>
                Animal Sightings Form
            </h1> 
            <div class="container">
                <nav>
                    <ul id = "mainlist">
                        <div class="row">
                            <div class="col-lg-1"><li><a href = "Index.html"> <strong>Home</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Birds.html"> <strong>Birds</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Mammals.html"> <strong>Mammals</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Reptiles.html"> <strong>Reptiles</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Fish.html"> <strong>Fish</strong></a></li> </div>
                            <div class="col-lg-1"><li><a href = "Amphibians.html"> <strong>Amphibians</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "Arthropods.html"> <strong>Arthropods</strong></a></li></div>
                            <div class="col-lg-1"><li><a href = "contact.html"> <strong>Contact us</strong></a></li></div>                                    
                        </div>
                    </ul>
                </nav>
            </div> 
        </header>
        <body>
            <form action="Index.html" id='sightingform' method="post">
                <section id="name"class="mb-3">
                    <label class="form-label"for="firstname">What was your first name?</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
                </section>
                <hr>
                <section id="surname"class="mb-3">
                    <label for="lastname"class="form-label">What was your last name?</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                </section>
                <hr>
                <section id="Phone_number"class="mb-3">
                    <label class="form-label" for="phone">Enter your phone number:</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" class="form-control">
                </section>
                <hr>
                <section id="class"class="mb-3">
                    <label for="classes" class="form-label">What type of animal did you see?</label>
                    <select class="form-control" id="animalclass">
                        <option value=""></option>
                        <option value="mammal"></option>
                        <option value="Bird"></option>
                        <option value="Reptile"></option>
                        <option value="Fish"></option>
                        <option value="Amphibian"></option>
                        <option value="Arthropod"></option>
                    </select>
                </section>
                <hr>
                <section id="date"class="mb-3">
                    <label for="Date" class="form-label">What date did you sight the animal?:</label>
                    <input type="date" id="Date" name="Date" class="form-control">
                </section>
                <hr>
                <section id="DayOrNight">
                    <span>Did you see the animal during the day or night?</span>
                    <br>
                    <div id="daynnight" class="form-check form-check-inline">
                        <input type="radio" class="btn-check" name="Day" id="day" value="day" autocomplete="off">
                        <label for="yes" class="btn btn-secondary">Day</label>
                        <input type="radio" class="btn-check" name="Night" id="no" value="day">
                        <label for="night" class="btn btn-secondary">Night</label>
                    </div>
                </section>
                <hr>
                <section id="description">
                    <label for="extra" class="form-label">Please provide a description of the animal</label>
                    <br>
                    <textarea id="extra" name="extra" rows="5" cols="50" class="form-control"></textarea>
                </section>
                <hr>
                <section id="NearestTown"class="mb-3">
                    <label for="town" class="form-label">What was the nearest town during this occurance?</label>
                    <input type="text" name="town" id="town" class="form-control">   
                </section>
                <hr>
                <section id="submission">
                    <input type="submit" value="Submit sighting" onClick="validateForm(event)"/>
                </section>
            </form>
        </body>
    </div>
</html>