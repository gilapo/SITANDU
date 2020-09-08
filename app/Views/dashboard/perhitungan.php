<?php
$imtN = 0;
$imtP = 0;
$imtB = 0;
foreach ($antro as $a) {
    if ($a['imt'] < 17) {
        $imtN += 1;
    } else if ($a['imt'] >= 17 || $a['imt'] <= 25) {
        $imtP += 1;
    } else if ($a['imt'] >= 26) {
        $imtB += 1;
    }
}
//
$lpN = 0;
$lpP = 0;
$lpB = 0;
foreach ($antro as $b) {
    if ($b['lp'] < 85) {
        $lpN += 1;
    } else if ($b['lp'] >= 86 || $b['lp'] <= 91) {
        $lpP += 1;
    } else if ($b['lp'] >= 92) {
        $lpB += 1;
    }
}
//
// <option value = "td" > Tekanan Darah < /option> <
//     option value = "gd" > Gula Darah < /option> <
//     option value = "kt" > Kolesterol Total < /option> <
//     option value = "au" > Asam Urat < /option> <
//     option value = "ape" > Arus Puncak Ekspirasi < /option>
$tdN = 0;
$tdP = 0;
$tdB = 0;
foreach ($cekes as $c) {
    if ($c['sistole'] <= 120 && $c['diastole'] <= 80) {
        $tdN += 1;
    } else if ($c['sistole'] >= 121 && $c['sistole'] <= 139 || $c['diastole'] >= 81 && $c['diastole'] <= 90) {
        $tdP += 1;
    } else if ($c['sistole'] >= 140 || $c['diastole'] >= 91) {
        $tdB = 1;
    }
}

$gdN = 0;
$gdP = 0;
$gdB = 0;
foreach ($cekes as $d) {
    if ($d['jenis_gd'] == 'gds') {
        if ($d['gds'] <= 199) {
            $gdN += 1;
        } else if ($d['gds'] >= 200) {
            $gdB += 1;
        }
    } else if ($d['jenis_gd'] == 'gdp') {
        if ($d['gds'] <= 107) {
            $gdN += 1;
        } else if ($d['gds'] >= 108 && $d['gds'] <= 125) {
            $gdP += 1;
        } else if ($d['gds'] >= 126) {
            $gdB += 1;
        }
    }
}

$ktN = 0;
$ktP = 0;
$ktB = 0;
foreach ($cekes as $e) {
    if ($e['kolesterol'] <= 170) {
        $ktN += 1;
    } else if ($e['kolesterol'] >= 171 && $e['kolesterol'] <= 199) {
        $ktP += 1;
    } else if ($e['kolesterol'] >= 200) {
        $ktB += 1;
    }
}

$auN = 0;
$auP = 0;
$auB = 0;
foreach ($cekes as $f) {

    if ($f['asam_urat'] >= 6) {
        $auB += 1;
    } else {
        $auN += 1;
    }
}

$apeN = 0;
$apeP = 0;
$apeB = 0;
foreach ($cekes as $g) {

    if ($g['ape'] == 'laki-laki') {
        if ($g['ekspirasi'] >= 500 && $g['ekspirasi'] <= 700) {
            $apeN += 1;
        } else {
            $apeB += 1;
        }
    } else if ($g['ape'] == 'perempuan') {
        if ($g['ekspirasi'] >= 280 && $g['ekspirasi'] <= 500) {
            $apeN += 1;
        } else {
            $apeB += 1;
        }
    }
}
//dd($tdB);
