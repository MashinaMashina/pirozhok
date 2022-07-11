<?php $this->header(['styles' => [['href' => BASE_DIR . 'assets/admin.css']]]); ?>

    <main class="flex-shrink-0">
        <div class="container content-container">
            <h2 class="mt-5">Список меню</h2>

            <ul>
                <li><a href="<?=BASE_DIR?>admin">Панель администратора</a></li>
            </ul>

            <?foreach ($menus as $menu):?>
                <a href="<?=BASE_DIR?>admin/menu/<?=intval($menu->id)?>"><?=htmlentities($menu->date)?></a><br>
            <?endforeach;?>
        </div>
    </main>

<?php $this->footer(); ?>