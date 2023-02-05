<?php
    $les = Array(
        // Υποχρεωτικά
        Array("Φυσική Ι (Μηχανική)","K","6"),
        Array("Μαθηματικά Ι","K","6"),
        Array("Εισαγωγή στον Προγραμματισμό","K","6"),
        Array("Ψηφιακή Σχεδίαση","K","6"),
        Array("Εισαγωγή στην Οικονομική","K","4"),
        Array("Μαθηματικά ΙΙ","K","6"),
        Array("Φυσική ΙΙ (Ηλεκτρομαγνητισμός-Οπτική)","K","6"),
        Array("Αντικειμενοστραφής Προγραμματισμός","K","6"),
        Array("Αρχιτεκτονική Υπολογιστών","arxitektoniki","6"),
        Array("Μικροοικονομική","K","4"),
        Array("Πιθανότητες και Στατιστική","K","4"),
        Array("Ηλεκτρονική και Ηλεκτρικά Κυκλώματα","K","6"),
        Array("Σήματα και Συστήματα","K","6"),
        Array("Διοίκηση και Λήψη Αποφάσεων","K","4"),
        Array("Λειτουργικά Συστήματα","K","6"),
        Array("Συστήματα Αυτομάτου Ελέγχου","K","6"),
        Array("Συστήματα Επικοινωνιών","K","5"),
        Array("Δίκτυα Δεδομένων - Υπολογιστών","K","4"),
        Array("Βάσεις Δεδομένων","K","5"),
        Array("Τεχνητή Νοημοσύνη","K","4"),
        Array("Βιομηχανική Οργάνωση","K","4"),
        Array("Τεχνολογίες Εφαρμογών Διαδικτύου","K","4"),
        Array("Προγραμματισμός Συστήματος","K","6"),
        Array("Χρηματοοικονομική Λογιστική & Διοίκηση","K","4"),
        Array("Ρομποτική και Εφαρμογές","K","6"),

        // Σεμινάρια
        Array("Ακαδημαϊκή Γραφή και Αγγλική Ορολογία","S","2"),
        Array("Ακαδημαϊκή Γραφή και Τεχνικές Παρουσιάσεων","S","2"),
        Array("Σεμινάριο Python","S","2"),
        Array("Σεμινάριο MATLAB","S","2"),
        Array("Σεμινάριο Labview","S","2"),
        Array("Βιομηχανικά Προβλήματα","S","2"),

        // Υποχρεωτικά Κατεύθυνσης Συστημάτων ΨΒ
        Array("Διακριτά Μαθηματικά","YA","4"),
        Array("Δομές Δεδομένων και Τεχνικές Προγραμματισμού (προ 2023)","YA","6"),
        Array("Δομές Δεδομένων και Τεχνικές Προγραμματισμού (2023++)","YA","6"),
        Array("Ψηφιακή Επεξεργασία Σήματος (προ 2023)","YA","6"),
        Array("Ψηφιακή Επεξεργασία Σήματος (2023++)","YA","4"),
        Array("Αλγόριθμοι και Πολυπλοκότητα (προ 2023)","YA","4"),
        Array("Αλγόριθμοι και Πολυπλοκότητα (2023++)","YA","4"),
        Array("Βιομηχανικός Έλεγχος και Αισθητήρες (προ 2023)","YA","4"),
        Array("Βιομηχανικός Έλεγχος και Αισθητήρες (2023++)","YA","5"),
        Array("Βιομηχανικά Ηλεκτρονικά","YA","4"),
        Array("Επικοινωνίες Μικρής Εμβέλειας","YA","4"),
        Array("Διαχείριση Συστημάτων και Δικτύων (προ 2023)","YA","4"),
        Array("Διαχείριση Συστημάτων και Δικτύων (2023++)","YA","4"),
        Array("Μηχανική Μάθηση","YA","4"),
        Array("Διαδίκτυο των Πραγμάτων (IoT)","YA","4"),
        Array("Επικοινωνία Ανθρώπου Μηχανής","YA","4"),

        // Υποχρεωτικά Κατεύθυνσης Διοίκησης ΨΒ
        Array("Διοίκηση Καινοτομίας και Τεχνολογίας","YB","4"),
        Array("Διοίκηση Ανθρωπίνων Πόρων","YB","4"),
        Array("Τεχνική Ελεγκτική (προ 2023)","YB","4"),
        Array("Τεχνική Ελεγκτική (2023++)","YB","3"),
        Array("Διαχείριση Έργων","YB","4"),
        Array("Διοίκηση Ποιότητας","YB","4"),
        Array("Χρηματοοικονομική Ανάλυση - Επενδύσεις","YB","4"),
        Array("Πληροφοριακά Συστήματα","YB","5"),
        Array("Τεχνοοικονομική Ανάλυση και Μελέτες","YB","4"),
        Array("Συστήματα Υποστήριξης Αποφάσεων","YB","3"),
        Array("Διοικητική Πληροφοριακών και Τηλεπικοινωνιακών Συστημάτων","YB","4"),
        Array("Πληροφοριακά Συστήματα Διοίκησης και Επιχειρησιακών Πόρων","YB","4"),

        // Μαθήματα Επιλογής
        Array("Συστήματα Κινητών Επικοινωνιών","EA","4"),
        Array("Ανανεώσιμες Πηγές Ενέργειας","EAB","4"),
        Array("Τεχνικές Εξόρυξης Δεδομένων ","EAB","4"),
        Array("Ηλεκτρονικό Επιχειρείν και Ψηφιακή Επιχειρηματικότητα","EB","4"),
        Array("Μάρκετινγκ (προ 2023)","EB","3"),
        Array("Μάρκετινγκ (2023++)","EB","4"),
        Array("Ανάλυση/Σχεδίαση Συστημάτων Λογισμικού","EAB","4"),
        Array("Έξυπνα Δίκτυα Ενέργειας (Smart grid)","EAB","4"),
        Array("Χρηματοοικονομική Μηχανική - Χαρτοφυλάκια","EB","4"),
        Array("Έλεγχος και Προγραμματισμός Ρομπότ","EA","5"),
        Array("Προγραμματισμός Κινητών Συσκευών","EA","5"),
        Array("Υπολογιστική νέφους (Cloud Computing)","EA","4"),
        Array("Ενσωματωμένα Συστήματα","EA","5"),
        Array("Τεχνολογίες Ψηφιακού Διδύμου (Digital Twin)","EA","4"),
        Array("Μοντελοποίηση Συστημάτων - Προσομοίωση","EAB","4"),
        Array("Σχεδιασμός/Παραγωγή με Υπολογιστή (CAD/CAM)","EAB","4"),
        Array("Εφοδιαστική Αλυσίδα","EB","5"),
        Array("Οργανωσιακή Συμπεριφορά ","EB","3"),
        Array("Άλγεβρα & Εφαρμογές","EAB","4"),

        // Ελεύθερα Μαθήματα
        Array("Ιστορία και Φιλοσοφία της Τεχνολογίας (προ 2023)","EE","4")
);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Παίρνεις πτυχίο; - Τεχνολογιών Ψηφιακής Βιομηχανίας">
    <meta name="author" content="MyDind Team">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Meta -->
    <meta property="og:title" content='Παίρνεις πτυχίο;' />
    <meta property="og:image" content='http://mydind.eu/MyDInd-university.png' />
    <meta property="og:description" content='Πτυχίο Τεχνολογιών Ψηφιακής Βιομηχανίας' />
    <meta property="og:url" content='http://mydind.eu/' />
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website' />

    <!-- Custom styles for this template -->
    <link href="mycss.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Πτυχίο Τεχνολογιών Ψηφιακής Βιομηχανίας</title>
</head>

<body>
    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <span class="fs-4">Η παρούσα εφαρμογή ισχύει <u>μόνο</u> για τους φοιτητές που έχουν εισαχθεί το
                ακαδημαϊκό έτος <b>2019-2020</b> και <b>2020-2021</b>
            </span>
        </header>

        <main>
            <h1>Παίρνεις πτυχίο;</h1>
            <p class="fs-5 col-md-12">Το μόνο που έχεις να κάνεις για να μάθεις είναι να επιλέξεις τα μαθήματα τα
                οποία έχεις περάσει.
            </p>
            <p class="fs-5 col-md-12">Δες τα συγκεντρωμένα καθώς κάποια από τα μαθήματα κατεύθυνσης έγιναν επιλογής και
                αρκετά δεν είναι πια υποχρεωτικά.
                Παρόλα αυτά εμείς θα υπολογίσουμε τα πάντα <u>βάση των μεταβατικών διατάξεων</u>.
            </p>

            <!-- https://html.form.guide/php-form/php-form-checkbox/ -->
            <div class="row justify-content-md-center">

                <div class="col-md-6">
                    <form action="" method="post">
                        <h2>Υποχρεωτικά</h2>
                        <div class="list-group d-grid gap-3">
                            <?php for ($row = 0; $row < 25; $row++) {
                                        echo "
                                        <button type=\"button\" class=\"btn btn-outline-success myles\" name=\"lessons\" value=".$les[$row][1].'_'.$les[$row][2].">"
                                            .$les[$row][0]."
                                        </button>
                                        "; 
                                }
                            ?>
                        </div>
                        <br>
                        <h2>Σεμινάρια</h2>
                        <div class="list-group d-grid gap-3">
                            <?php for ($row = 25; $row < 31; $row++) {
                                    echo "
                                    <button type=\"button\" class=\"btn btn-outline-success myles\" name=\"lessons\" value=".$les[$row][1].'_'.$les[$row][2].">"
                                            .$les[$row][0]."
                                        </button>
                                    "; 
                                }
                            ?>
                        </div>
                        <br>
                        <h2>Υποχρεωτικά Κατεύθυνσης Συστημάτων</h2>
                        <div class="list-group d-grid gap-3">
                            <?php for ($row = 31; $row < 47; $row++) {
                                        echo "
                                        <button type=\"button\" class=\"btn btn btn-outline-success myles\" name=\"lessons\" value=".$les[$row][1].'_'.$les[$row][2].">"
                                            .$les[$row][0]."
                                        </button>
                                        "; 
                                }
                            ?>
                        </div>
                        <br>
                        <h2>Υποχρεωτικά Κατεύθυνσης Διοίκησης</h2>
                        <div class="list-group d-grid gap-3">
                            <?php for ($row = 47; $row < 59; $row++) {
                                        echo "
                                        <button type=\"button\" class=\"btn btn btn-outline-success myles\" name=\"lessons\" value=".$les[$row][1].'_'.$les[$row][2].">"
                                            .$les[$row][0]."
                                        </button>
                                        "; 
                                }
                            ?>
                        </div>
                        <br>
                        <h2>Επιλογής</h2>
                        <div class="list-group d-grid gap-3">
                            <?php for ($row = 59; $row < 78; $row++) {
                                        echo "
                                        <button type=\"button\" class=\"btn btn btn-outline-success myles\" name=\"lessons\" value=".$les[$row][1].'_'.$les[$row][2].">"
                                            .$les[$row][0]."
                                        </button>
                                        "; 
                                }
                            ?>
                        </div>
                        <br>
                        <h2>Ελεύθερα</h2>
                        <div class="list-group d-grid gap-3">
                            <?php for ($row = 78; $row < 79; $row++) {
                                        echo "
                                        <button type=\"button\" class=\"btn btn btn-outline-success myles\" name=\"lessons\" value=".$les[$row][1].'_'.$les[$row][2].">"
                                            .$les[$row][0]."
                                        </button>
                                        "; 
                                }
                            ?>
                        </div>
                        </br>
                        <div class="mb-5 d-grid">
                            <input type="button" class="btn btn-primary btn-lg px-4" name="button" id="button"
                                onclick="result()" value="Δες πόσο κοντά είσαι">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <div id="element-to-print">
            <div id="result">

            </div>
            <footer class="pt-5 my-5 text-muted border-top">
                Created by the <a href="https://mydind.net/">mydind</a> team &middot; &copy; 2022
            </footer>
        </div>
    </div>


    <!-- 
        Εδώ ξεκινάνε τα αποτελέσματα
    -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script>
        var element = document.getElementById('element-to-print');
        var opt = {
            margin: 0.5,
            filename: 'myfile.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Bootstrap core jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"
        integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- jQuery v3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {

            $(".myles").click(function () {
                $(this).toggleClass("btn-outline-success");
                $(this).toggleClass("btn-success");
            });
        });

        function result() {
            var Ypoxrewtika = 0;
            var Kateuthinsis = 0;
            var Psifiakwn = 0;
            var Dioikisis = 0;
            var Seminaria_ECTS = 0;
            var Elefthera_ECTS = 0;
            var All_ECTS = 0;
            var ypoloipa;

            $.each($('.btn-success'), function () {
                var res = $(this).val();
                const myArray = res.split("_");
                var type = myArray[0];
                var ECTS = parseInt(myArray[1]);

                /* 
                    Να έχουν παρακολουθήσει επιτυχώς οποιαδήποτε 24 από τα παρακάτω 25 μαθήματα, τα
                    οποία στο νέο ΠΠΣ χαρακτηρίζονται ως μαθήματα κορμού
                */
                if (type == 'K') {
                    All_ECTS = All_ECTS + ECTS;
                    Ypoxrewtika++;
                }
                /*
                	Να έχουν παρακολουθήσει επιτυχώς 11 οποιαδήποτε μαθήματα από αυτά που
                	χαρακτηρίζονται στο νέο ΠΠΣ ως μαθήματα κατεύθυνσης (οποιασδήποτε κατεύθυνσης, είτε Α,
                	είτε Β, είτε συνδυασμός τους)
                */
                else if (type == 'YA' || type == 'YB') {
                    All_ECTS = All_ECTS + ECTS;
                    if (type == 'YA' || type == 'YB') {
                        Kateuthinsis++;
                        if (type == 'YA') {
                            Psifiakwn++;
                        } else if (type == 'YB') {
                            Dioikisis++;
                        }
                    }
                }
                /*
                Να έχουν παρακολουθήσει επιτυχώς σεμιναριακά μαθήματα (είτε του νέου, είτε του παλαιού
                ΠΠΣ) που αντιστοιχούν σε 8 ECTS και συγκεκριμένα:
                */
                else if (type == 'S') {
                    Seminaria_ECTS = Seminaria_ECTS + ECTS;
                    if (Seminaria_ECTS <= 8){
                        All_ECTS = All_ECTS + ECTS;
                    }
                }
                // Να έχουν παρακολουθήσει επιτυχώς μαθήματα ελεύθερης επιλογής που αντιστοιχούν σε 6 ECTS
                else if (type == 'EE') {
                    All_ECTS = All_ECTS + ECTS;
                    Elefthera_ECTS++; // Αυτό να διορθωθεί στη γενιά 2022-2023 καθώς άλλαξαν από 4 σε 3 τα ECTS των ελέυθερων
                }
                /*
                Μαθήματα επιλογής που έχουν χαρακτηριστεί στο νέο ΠΠΣ ως ΕΑ ή ΕΑΒ. Για όσους φοιτητές
                έχουν περάσει το μάθημα Άλγεβρα και Εφαρμογές, του προηγούμενου ΠΠΣ, αυτό προσμετράται
                στα μαθήματα επιλογής ΕΑΒ.
                */
                else if (type == 'EA' || type == 'EB' || type == 'EAB') {
                    All_ECTS = All_ECTS + ECTS;
                    if (type == 'EA') {
                        Psifiakwn++;
                    } else if (type == 'EB') {
                        Dioikisis++;
                    } else if (type == 'EAB') {
                        Psifiakwn++;
                        Dioikisis++;
                    }
                } else if (type == 'arxitektoniki') {
                    All_ECTS = All_ECTS + ECTS;
                    Ypoxrewtika++;
                    Psifiakwn++;
                }
                ypoloipa = (240 - All_ECTS) / 4;
            });

            if (All_ECTS != 240) 
            {
                ypoloipa = (240 - All_ECTS) / 4;
            } 
            else 
            {
                ypoloipa = 60;
            }

            var myresult = `
            <div class="container mt-3">
                <h2>Σύνολο ${All_ECTS} ECTS</h2>
                <p>Σου λείπουν <u>ακόμα ${240-All_ECTS} ECTS</u>.</p>
                <div class="media border p-3">
                    <img src="les.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                    <h4>Υποχρεωτικά: <small><i>${Ypoxrewtika}</i></small></h4>
                    <h3>Σου λείπουν ακόμα <u>${24-Ypoxrewtika} υποχρεωτικά μαθήματα</u>.</h3>      
                    </div>
                </div>
                <div class="media border p-3">
                    <img src="les.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                    <h4>Σεμινάρια: <small><i>${Seminaria_ECTS} ECTS</i></small></h4>
                    <h3>Σου λείπουν ακόμα ${8-Seminaria_ECTS} ECTS, δηλαδή <u>${(8-Seminaria_ECTS)/2} σεμινάρια</u>.</h3>      
                    </div>
                </div>
                <div class="media border p-3">
                    <img src="les.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                    <h4>Μαθήματα Κατεύθυνσης: <small><i>${Kateuthinsis}.</i></small></h4>
                    <h3>Σου λείπουν ακόμα ${11-Kateuthinsis} μαθήματα κατεύθυνσης.</h3>      
                    </div>
                </div>
                <div class="media border p-3">
                    <img src="les.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                    <h4>Ελεύθερα μαθήματα: <small><i>${Elefthera_ECTS}.</i></small></h4>
                    <h3>Σου λείπουν ακόμα <b>${2-Elefthera_ECTS}</b> ελεύθερα μαθήματα.</h3>      
                    </div>
                </div>
                <br>
                <h2>Κατεύθυνση</h2>
                <p>Η βεβαίωση παρακολούθησης κατεύθυνσης είναι προαιρετική.</p>
                <div class="media border p-3">
                    <img src="or.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                    <h4>Μαθήματα Συστημάτων: <small><i>${Psifiakwn}.</i></small></h4>
                    <h3>Αν θες να λάβεις βεβαίωση παρακολούθησης <b>κατεύθυνσης Συστημάτων</b> χρειάζεσαι <b>${12-Psifiakwn}</b> μαθήματα ΥΑ ή ΕΑ ή ΕΑΒ ακόμα.</h3>      
                    </div>
                </div>
                <div class="media border p-3">
                    <img src="or.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                    <h4>Μαθήματα Διοίκησης: <small><i>${Dioikisis}.</i></small></h4>
                    <h3>Αν θες να λάβεις βεβαίωση παρακολούθησης <b>κατεύθυνσης Διοίκησης</b> χρειάζεσαι <b>${11-Dioikisis}</b> μαθήματα ΥΒ ή ΕΒ ή ΕΑΒ ακόμα.</h3>      
                    </div>
                </div>

                <br>
                <h2>Πτυχίο</h2>
                
                <h4>Αν επιλέξεις:</h4>
                <ol class="list-group">
                    <li class="list-group-item">Εκπόνηση Πτυχιακής Εργασίας μόνο
                        <ul>
                            <li>Είσαι <b>${Math.ceil(ypoloipa-1)}</b> μαθήματα των 4 ECTS μακριά από το πτυχίο.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">Εκπόνηση Πρακτικής Άσκησης μόνο
                        <ul>
                            <li>Είσαι <b>${Math.ceil(ypoloipa-2)}</b> μαθήματα των 4 ECTS μακριά από το πτυχίο.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">Εκπόνηση Πτυχιακής Εργασίας Ι (4 ECTS) και Πρακτικής Άσκησης
                        <ul>
                            <li>Είσαι <b>${Math.ceil(ypoloipa-3)}</b> μαθήματα των 4 ECTS μακριά από το πτυχίο.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">Εκπόνηση Πτυχιακής Εργασίας Ι & ΙΙ (8 ECTS) και Πρακτικής Άσκησης
                        <ul>
                            <li>Είσαι <b>${Math.ceil(ypoloipa-4)}</b> μαθήματα των 4 ECTS μακριά από το πτυχίο.</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <!-- Στη δεύτερη έκδοση
            <div class="mb-5">
                <a onclick="html2pdf().set(opt).from(element).save()" class="btn btn-primary btn-lg px-4">Σώσε με ως
                    PDF</a>
            </div>
            -->
            `;
            document.getElementById("result").innerHTML = myresult;
            //var ajax = new XMLHttpRequest;
            //ajax.open("POST", "results.php", true);
            //ajax.send(myresult);
        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HMB7Z61RME"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HMB7Z61RME');
    </script>
</body>

</html>