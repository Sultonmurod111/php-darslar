<?php
include('header.php');
?>
<div class="form-container">
    <h2>Ro‘yxatdan o‘tish</h2>

    <form action="#" method="post">
        <label for="name">Ism Familiya</label>
        <input type="text" id="name" placeholder="Ismingizni kiriting" required>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email kiriting" required>

        <label for="password">Parol</label>
        <input type="password" id="password" placeholder="Parol kiriting" required>

        <label for="message">Xabar</label>
        <textarea id="message" rows="4" placeholder="Xabaringiz..."></textarea>

        <button type="submit">Yuborish</button>
    </form>
</div>
<?php
include('footer.php')
?>