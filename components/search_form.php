
<form class="uk-container uk-margin" action="/table" method="GET">
    <div class="uk-margin">
        <label for="datestart">Start Day</label>
        <input required type="date" name="datestart" id="datestart" max="<?php echo date("Y-m-d"); ?>" value="<?php echo $start_date; ?>">
    </div>
    <div class="uk-margin">
        <label for="dateend">End Day</label>
        <input required type="date" name="dateend" id="dateend" max="<?php echo date("Y-m-d"); ?>" value="<?php echo $end_date; ?>">
    </div>
    <div class="uk-margin">
        <label for="limit">Limit</label>
        <input required type="number" name="limit" id="limit" value="<?php echo $limit; ?>">
    </div>
    <div class="uk-margin">
        <button class="uk-button uk-button-default">Search</button>
    </div>
</form>