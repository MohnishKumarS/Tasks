<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice home</title>
    <link rel="stylesheet" href="assets/css/">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <h3>demo</h3>






    <?php
    $def_array = [
        ["id" => "dress01", "color" => "blue", "xs" => 31, "l" => 13, "m" => 10, "xl" => 1, "s" => 10],
        ["id" => "dress01", "color" => "white", "xs" => 10, "l" => 9, "m" => 8, "xl" => 9, "s" => 14],
        ["id" => "dress02", "color" => "green", "xs" => 4, "l" => 0, "m" => 12, "xl" => 25, "s" => 18],
        ["id" => "dress03", "color" => "red", "xs" => 14, "l" => 10, "m" => 0, "xl" => 29, "s" => 8],
        ["id" => "dress03", "color" => "pink", "xs" => 4, "l" => 10, "m" => 20, "xl" => 9, "s" => 8],
        ["id" => "dress04", "color" => "red", "xs" => 14, "l" => 10, "m" => 0, "xl" => 49, "s" => 28],
        ["id" => "dress05", "color" => "purple", "xs" => 24, "l" => 30, "m" => 22, "xl" => 49, "s" => 8],
        ["id" => "dress06", "color" => "yellow", "xs" => 64, "l" => 30, "m" => 2, "xl" => 9, "s" => 38],
    ];

    $color_shades = [];
    $dress_code = [];
    $dress_size = [];

    foreach ($def_array as $key => $value) {
        $color = $value['color'];
        $code = $value['id'];

        if (!in_array($color, $color_shades)) {
            $color_shades[] = $color;
        }

      
        $dress_code[$color][] = $code;

        
        foreach (['s', 'xs', 'm', 'l', 'xl'] as $size) {
            $dress_size[$code][$color][$size] = $value[$size];
        }
    }

    // // Example of accessing stored data:
    // foreach ($dress_size as $code => $sizesByColor) {
    //     echo "Dress Code: $code<br>";
    //     foreach ($sizesByColor as $color => $sizes) {
    //         echo "Color: $color<br>";
    //         foreach ($sizes as $size => $quantity) {
    //             echo "$size: $quantity<br>";
    //         }
    //     }
    //     echo "<br>";
    // }


        


    ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Array</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> uincode</th>
                                    <th> color shades</th>
                                    <th>S</th>
                                    <th>XS</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dress_size as $code => $sizesByColor) : ?>
                                    <tr>
                                        <td><?php echo $code; ?></td>

                                     
                                        <td>
                                            <?php foreach ($sizesByColor as $color => $sizes) : ?>
                                                <?php echo $color . "<br>"; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($sizesByColor as $color => $sizes) : ?>
                                                <?php echo isset($sizes['s']) ? $sizes['s'] . "<br>" : ""; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($sizesByColor as $color => $sizes) : ?>
                                                <?php echo isset($sizes['xs']) ? $sizes['xs'] . "<br>" : ""; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($sizesByColor as $color => $sizes) : ?>
                                                <?php echo isset($sizes['m']) ? $sizes['m'] . "<br>" : ""; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($sizesByColor as $color => $sizes) : ?>
                                                <?php echo isset($sizes['l']) ? $sizes['l'] . "<br>" : ""; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($sizesByColor as $color => $sizes) : ?>
                                                <?php echo isset($sizes['xl']) ? $sizes['xl'] . "<br>" : ""; ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>