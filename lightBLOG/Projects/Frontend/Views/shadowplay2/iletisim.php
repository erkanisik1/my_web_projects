<?php import::view(THEMA.'header'); ?>

        <!-- insert the page content here -->

        <h1>İLETİŞİM</h1>

        <p>Sitemiz ve elektronik konusunda aşağıdaki formdan bize ulaşabilirsiniz...</p>

        <form action="#" method="post">

          <div class="form_settings">

            <p><span>Adınız</span><input class="contact" type="text" name="isim" value="" /></p>

            <p><span>E-Posta adresiniz</span><input class="contact" type="text" name="mail" value="" /></p>

            <p><span>Mesajınız</span><textarea class="contact textarea" rows="8" cols="50" name="mesaj"></textarea></p>

            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Gönder" /></p>

          </div>

        </form>

        <p><br /><br />NOTE: Sizlere dönüş yapabilmemiz için lütfen doğru eposta adresi girin.</p>

      </div>

    </div>

   <?php import::view(THEMA.'footer'); ?>