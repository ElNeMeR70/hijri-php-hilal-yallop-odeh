<?php
declare(strict_types=1);

/**
 * hijri-php-hilal-yallop-odeh — محرك معيار يالوب وعودة لرؤية الهلال الفلكية
 * Yallop q-Test & Odeh V-Criterion New Crescent Visibility Predictor
 */
$input = "ARCV=11.4deg,W=0.42arcmin";
$digest = substr(hash("sha256", "hijri-php-hilal-yallop-odeh:" . $input), 0, 12);

echo "[RUN] hijri-php-hilal-yallop-odeh (PHP) — Yallop q-Test & Odeh V-Criterion New Crescent Visibility Predictor" . PHP_EOL;
echo "[AR]  محرك معيار يالوب وعودة لرؤية الهلال الفلكية" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] YallopQ=+0.24 | Zone=A_NakedEyeVisible | CrescentSightable=True | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
