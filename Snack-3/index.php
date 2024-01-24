<?php 
$news = [
    '24/01/2024' => [
        [
            'title' => 'Tensioni nel Mar Rosso', 
            'author' => 'Milano Finanza',
            'text' => 'L\aumento dei costi di spedizione può risvegliare l\inflazione. Ma i mercati sottovalutano il rischio',
        ],
        [
            'title' => 'Cina al galoppo', 
            'author' => 'Milano Finanza',
            'text' => 'Pechino chiude ai fondi che investono all\estero. Ecco quali borse sono più colpite',
        ],
    ],
    '20/06/2023' => [
        [
            'title' => 'Cori razzisti contro Maignan', 
            'author' => 'Tutto Sport',
            'text' => 'La Polizia di Stato di Udine ha identificato altri colpevoli che hanno rivolto frasi e gesti discriminatori nei confronti del portiere del Milan',
        ],
    ],
    '08/01/2024' => [
        [
            'title' => 'I consigli per essere tranquilli il giorno della maratona o mezza maratona', 
            'author' => 'Corriere dello Sport',
            'text' => 'Tanti i possibili consigli per il giorno della maratona o di una mezza maratona. I più comuni sono sul come vestirsi per raggiungere la partenza, cosa mangiare e tanto altro',
        ],
        [
            'title' => 'Fonseca, che attacco a Ronaldo: "Non merita risposta"', 
            'author' => 'Corriere dello Sport',
            'text' => 'L\ex allenatore della Roma, ora al Lille, si scaglia contro il connazionale: "Le persone intelligenti capiranno"',
        ],
        [
            'title' => 'Iea, nel 2026 metà elettricità da rinnovabili e nucleare', 
            'author' => 'Quotidiano Nazionale',
            'text' => 'Le fonti di energia a basse emissioni, cioè rinnovabili e nucleare, copriranno circa metà della produzione elettrica mondiale nel 2026, contro meno del 40% nel 2023.',
        ],
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container d-flex flex-column align-items-centertext-center  mt-5">
        <?php foreach ($news as $index => $newss) { ?>
                <h1 class="text-center fw-bold">Notizie del giorno: <?php echo $index ?></h1>
                <div class="row pb-5">
                    <?php foreach ($newss as $news_info) { ?>
                        <div>
                            <div class="mt-3">
                                <h2 class="text-center bold text-decoration-underline py-2"><?php echo $news_info['title']; ?></h2>
                                <p class="text-center py-2"><?php echo $news_info['text']; ?></p>
                                <p class="text-center py-2">Autore: <?php echo $news_info['author']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        <?php } ?> 
    </div>
</body>
</html>