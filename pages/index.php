<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/sections.css" />
    <!--  -->
    <link rel="stylesheet" href="../styles/index.css" />
</head>

<body>
    <div class="app">


        <?php include '../layout/nav.php'; ?>


        <div class="containerS1 ">
            <?php include '../layout/header.php'; ?>

            <div class="indexPage">
                <div class="pageS1">


                    <div class="cardHead">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="sectionS1 cardS1 flex align">
                                    <div class="icon">
                                        <Image src='../src/icons/home/users.png' />
                                    </div>
                                    <div class="content">
                                        <div class="name">all customers</div>
                                        <div class="sectionNumber">
                                            <div class="number">2045</div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-4">
                                <div class="sectionS1 cardS1 flex align">
                                    <div class="icon">
                                        <Image src='../src/icons/home/userPlus.png' />
                                    </div>
                                    <div class="content">
                                        <div class="name">All projects</div>
                                        <div class="sectionNumber">
                                            <div class="number">2045</div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col col-lg-4">


                                <div class="sectionS1 cardS1 flex align">
                                    <div class="icon">
                                        <Image src='/crm/src/icons/home/user0.png' />
                                    </div>
                                    <div class="content">
                                        <div class="name">pending tasks</div>
                                        <div class="sectionNumber">
                                            <div class="number">2045</div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>


                    <?php include '../components/analyticsSections/servicesOverview_section.php'; ?>
                </div>
            </div>
        </div>
    </div>



    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
    <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const cta = document.getElementById("salesPurchases");

        new Chart(cta, {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Agt",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                        label: "Sales",
                        data: [12, 1, 3, 5, 2, 3],
                        backgroundColor: "#1F90FF",
                    },
                    {
                        label: "Purchases",
                        data: [10, 11, 2, 6, 1, 4],
                        backgroundColor: "#30C88C",
                    },
                ],
            },
            options: {
                barPercentage: 1,
                plugins: {
                    legend: {
                        align: "end",
                        labels: {
                            usePointStyle: true,
                            pointStyle: "circle",
                            boxWidth: 8,
                            boxHeight: 8,
                        },
                    },
                },
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.0,
                        barPercentage: 0.0,
                    }, ],
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>




</body>

</html>