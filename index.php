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
    <?php include "components/navigation.php"; ?>

    <div class="uk-container uk-margin-top">
        <form class="uk-form-stacked">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">First Name</label>
                <div class="uk-form-controls">
                    <input required class="uk-input" id="firstName" name="firstName" type="text" placeholder="First Name">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Last Name</label>
                <div class="uk-form-controls">
                    <input required class="uk-input" id="lastName" name="lastName" type="text" placeholder="Last Name">
                </div>
            </div>
            
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Phone</label>
                <div class="uk-form-controls">
                    <input required class="uk-input" id="phone" name="phone" type="text" placeholder="Phone">
                </div>
            </div>
            
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input required class="uk-input" id="email" name="email" type="email" placeholder="Email">
                </div>
            </div>

            <div class="uk-margin">
                <button class="uk-button uk-button-default" id="send_data_form">Send data</button>
            </div>

        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit-icons.min.js"></script>
</body>
</html>

<!-- testmail@gmail.com -->