<?php require_once "../functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/css/uikit.min.css" />

</head>
<body>
    <?php 
        $start_date = !empty($_GET['datestart']) ? $_GET['datestart'] : "2022-12-01";
        $end_date   = !empty($_GET['dateend']) ? $_GET['dateend'] : "2022-12-31";
        $limit      = !empty($_GET['limit']) ? $_GET['limit'] : "100";

        include "../components/navigation.php"; 
        include "../components/search_form.php"; 
        
        $result     = getStatuses($start_date, $end_date, $limit); 
        $statuses   = json_decode($result); 
        // var_dump($statuses);
    ?>

    <?php if($statuses): ?>
        <table class="uk-table uk-table-small uk-table-divider uk-container">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>FTD</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($statuses->data as $lid): ?>
            <tr>
                <td><?php echo $lid->id; ?></td>
                <td><?php echo $lid->email; ?></td>
                <td><?php echo $lid->status; ?></td>
                <td><?php echo $lid->ftd; ?></td>
            </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="uk-container uk-margin">
                <b>Empty list</b>
            </div>
    <?php endif; ?>

    
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit-icons.min.js"></script>
</body>
</html>