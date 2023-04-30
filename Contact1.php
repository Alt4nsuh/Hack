<?php 
    include_once 'Header2.php';
?>

        <div class="form-style-3">
            <form>
            <fieldset><legend>Personal</legend>
            <label for="field1"><span> Нэр <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
            <label for="field2"><span> Нас <span class="required">*</span></span><input type="email" class="input-field" name="field2" value="" /></label>
            <input type="radio" name="gender" value="male"> Эрэгтэй <input type="radio" name="gender" value="female"> Эмэгтэй
            <label for="field3"><span>Өндөр <span class="required">*</span></span><input type="text" class="input-field" name="field3" value="" /></label>
            <label for="field3"><span>Жин <span class="required">*</span></span><input type="text" class="input-field" name="field3" value="" /></label>
            <label for="field4"><span>Таны өдөрт идэвхтэй хөдөлгөөн хийдэг хугацаа </span><select name="field4" class="select-field">
            <option value="Appointment">1-2 цаг</option>
            <option value="Interview">2-3 цаг</option>
            <option value="Regarding a post">3 цагаас их</option>
            <option value="Regarding a post">Огт хөдөлгөөн хийдэггүй</option>
            <br>
            <input type="checkbox" id="zorilgo1" name="zorilgo1" value="Турах">
            <label for="zorilgo1"> Турах </label><br>
            <input type="checkbox" id="zorilgo2" name="zorilgo2" value="Эрүүл зөв хооллолт">
            <label for="zorilgo2"> Эрүүл зөв хооллолт </label><br>
            <input type="checkbox" id="zorilgo3" name="zorilgo3" value="Фитнес хооллолт">
            <label for="zorilgo3"> Фитнес хооллолт</label><br>
            </select></label>
        </fieldset>
            </form>
        </div>
    </body>
</html>