<?php
echo form_open('product/store');
echo form_input('product_name','',array('placeholder'=>'product name'));
echo form_input('price','',array('placeholder'=>'price','class'=>'form-control'));
echo "<select name='category_id'>";
foreach ($categories as $category){
    echo "<option value='$category->category_id'>$category->category_name</option>";
}
echo '</select>';
echo form_submit('button','save data');
echo form_close();
?>