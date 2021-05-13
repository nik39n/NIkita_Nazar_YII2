<nav class="fot">
    <div>
        <? foreach ($footer as $items) : ?>
            <div class="wrap_fot">
                <p >Copyright:<?= $items['copyright'] ?></p>
                <p ><?= $items['authorone'] ?>&<?= $items['authortwo'] ?></p>
            </div>
        <?php endforeach; ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if (!empty($menu)) : ?>
                    <?php foreach ($menu as $items) : ?>
                        <?php if ($items['name'] === 'Главная') : ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= yii\helpers\Url::home() ?>"><?= $items['name'] ?></a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= yii\helpers\Url::to([$items['action']]); ?>"><?= $items['name'] ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        </ul>
        </div>
    </div>
</nav>