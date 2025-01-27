<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Lab 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet">
  <style>
       .error {
           border: 2px solid red;
       }
  </style>
          
</head>
  
<body>
  
  <?php
if (!empty($messages)) {
    print('<div id="messages">');
    foreach ($messages as $message) {
        print($message);
    }
    print('</div>');
}
?>
  
<div class="container">
  <h1 class="text-center m-5">Web Backend Lab 5</h1>

  <div class="container-sm theme-list py-3 pl-0 mb-3">
    <div class="d-flex flex-column align-items-center">

      <form class="d-block p-2" action="index.php" method="POST">

          <div class="form-floating mb-3">
            
                  <input
                        name="fio"
                        <?php if ($errors['fio_empty'] || $errors['fio_error']) {print 'class="form-control error"';}else{print 'class="form-control"';} ?>
                        type="text"
                        placeholder="FirstName LastName"
                        value="<?php print $values['fio_value']; ?>";
                        id="fio"
                    >
            
                  <label for="fio" class="form-label">Ваше имя</label>
                </div>

        
          <div class="form-floating mb-3">
                  
                  <input
                        <?php if ($errors['email_error']) {print 'class="form-control error"';}else{print 'class="form-control"';} ?>
                        name="email"
                        type="email"
                        placeholder="name@example.com"
                        value="<?php print $values['email_value']; ?>";
                        id="email"
                    >
                  
                  <label for="email" class="form-label">Ваш email</label>
                </div>
        

          <div class="mb-3">
            <label for="year" class="form-label">Год рождения</label>
                <select <?php if ($errors['year_empty']) {print 'class="form-select error"';}else{print 'class="form-select"';} ?> name="year" id="year">
                    <option selected="selected" value="---">---</option>
                    <?php for($i = 1900; $i < 2020; $i++) {?>
                          <option <?php if($values['year_value'] == $i) print 'selected="selected"';?> value="<?php print $i; ?>"><?= $i; ?></option>
                  <?php }?>
                </select>
        </div>


            
                <div class="mb-3">
                    <label <?php if ($errors['sex_empty']) {print 'class="form-label error"';}else{print 'class="form-label"';} ?>>Пол</label>
                    <br>
                    <input
                        class="form-check-input"
                        type="radio"
                        name="sex"
                        value="0"
                        <?php if($values['sex_value'] == 0) print 'checked';?>
                    > Male

                    <input
                        class="form-check-input"
                        type="radio"
                        name="sex"
                        value="1"
                        <?php if($values['sex_value'] == 1) print 'checked';?>
                    > Female

                </div>

            
                <div class="mb-3">
                    <label <?php if ($errors['limb_empty']) {print 'class="form-label error"';}else{print 'class="form-label"';} ?>>Число конечностей</label>
                    <br>
                    <input
                        class="form-check-input"
                        type="radio"
                        name="limb"
                        value="2"
                        <?php if($values['limb_value'] == 2) print 'checked';?>
                    >
                    <label class="form-check-label">2</label>
                    <input
                        class="form-check-input"
                        type="radio"
                        name="limb"
                        value="4"
                        <?php if($values['limb_value'] == 4) print 'checked';?>
                    >
                    <label class="form-check-label">4</label>
                    <input
                        class="form-check-input"
                        type="radio"
                        name="limb"
                        value="6"
                        <?php if($values['limb_value'] == 6) print 'checked';?>
                    >
                    <label class="form-check-label">6</label>
                    <input
                        class="form-check-input"
                        type="radio"
                        name="limb"
                        value="8"
                        <?php if($values['limb_value'] == 8) print 'checked';?>
                    >
                    <label class="form-check-label">8</label>
                    <input
                        class="form-check-input"
                        type="radio"
                        name="limb"
                        value="10"
                        <?php if($values['limb_value'] == 10) print 'checked';?>
                    >
                    <label class="form-check-label">10</label>
                </div>

                <div class="mb-3">
                    <label <?php if ($errors['abilities_error']||$errors['abilities_empty']) {print 'class="form-label error"';}else{print 'class="form-label"';} ?>>Сверхсособности</label>
                    <select class="form-select" name="abilities[]" multiple="multiple">
                        <option <?php if($values['ability0']==1) print 'selected="selected"';?> value="1">Бессмертие</option>
                        <option <?php if($values['ability1']==1) print 'selected="selected"';?> value="2">Прохождение сквозь стены</option>
                        <option <?php if($values['ability2']==1) print 'selected="selected"';?> value="3">Левитация</option>
                        <option <?php if($values['ability3']==1) print 'selected="selected"';?> value="4">Невидимость</option>
                    </select>
                </div>
            

                <div class="mb-3 form-floating">
          <textarea
            class="form-control"
            name="bio"
            style="height: 100px; width: 420px;">
          <?php print $values['bio_value'];?></textarea>
                    <label class="form-label">Биография</label>
                </div>

                <div class="mb-3 form-check">
                    <input
                        <?php if ($errors['accept_error']) {print 'class="form-check-input error"';} else {print 'class="form-check-input"';} ?>
                        type="checkbox"
                        name="accept"
                        required
                    >
                    <label class="form-check-label">Принять пользовательские соглашения</label>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-light" type="submit" value="send">Отправить</button>
                </div>

            </form>

        </div>
    </div>

</div>
<footer>
    <h2 class="text-center m-3">
         Фурса В.Е. 2023
    </h2>
</footer>
</body>
