<?php
$imtNY = 0;
$imtPY = 0;
$imtBY = 0;
foreach ($antroY as $a) {
    if ($a['imt'] < 17) {
        $imtNY += 1;
    } else if ($a['imt'] >= 17 || $a['imt'] <= 25) {
        $imtPY += 1;
    } else if ($a['imt'] >= 26) {
        $imtBY += 1;
    }
}
//
$lpNY = 0;
$lpPY = 0;
$lpBY = 0;
foreach ($antroY as $b) {
    if ($b['lp'] < 85) {
        $lpNY += 1;
    } else if ($b['lp'] >= 86 || $b['lp'] <= 91) {
        $lpPY += 1;
    } else if ($b['lp'] >= 92) {
        $lpBY += 1;
    }
}
//
// <option value = "td" > Tekanan Darah < /option> <
//     option value = "gd" > Gula Darah < /option> <
//     option value = "kt" > Kolesterol Total < /option> <
//     option value = "au" > Asam Urat < /option> <
//     option value = "ape" > Arus Puncak Ekspirasi < /option>
$tdNY = 0;
$tdPY = 0;
$tdBY = 0;
foreach ($cekesY as $c) {
    if ($c['sistole'] <= 120 && $c['diastole'] <= 80) {
        $tdNY += 1;
    } else if ($c['sistole'] >= 121 && $c['sistole'] <= 139 || $c['diastole'] >= 81 && $c['diastole'] <= 90) {
        $tdPY += 1;
    } else if ($c['sistole'] >= 140 || $c['diastole'] >= 91) {
        $tdBY = 1;
    }
}

$gdNY = 0;
$gdPY = 0;
$gdBY = 0;
foreach ($cekesY as $d) {
    if ($d['jenis_gd'] == 'gds') {
        if ($d['gds'] <= 199) {
            $gdNY += 1;
        } else if ($d['gds'] >= 200) {
            $gdBY += 1;
        }
    } else if ($d['jenis_gd'] == 'gdp') {
        if ($d['gds'] <= 107) {
            $gdNY += 1;
        } else if ($d['gds'] >= 108 && $d['gds'] <= 125) {
            $gdPY += 1;
        } else if ($d['gds'] >= 126) {
            $gdBY += 1;
        }
    }
}

$ktNY = 0;
$ktPY = 0;
$ktBY = 0;
foreach ($cekesY as $e) {
    if ($e['kolesterol'] <= 170) {
        $ktNY += 1;
    } else if ($e['kolesterol'] >= 171 && $e['kolesterol'] <= 199) {
        $ktPY += 1;
    } else if ($e['kolesterol'] >= 200) {
        $ktBY += 1;
    }
}

$auNY = 0;
$auPY = 0;
$auBY = 0;
foreach ($cekesY as $f) {

    if ($f['asam_urat'] >= 6) {
        $auBY += 1;
    } else {
        $auNY += 1;
    }
}

$apeNY = 0;
$apePY = 0;
$apeBY = 0;
foreach ($cekesY as $g) {

    if ($g['ape'] == 'laki-laki') {
        if ($g['ekspirasi'] >= 500 && $g['ekspirasi'] <= 700) {
            $apeNY += 1;
        } else {
            $apeBY += 1;
        }
    } else if ($g['ape'] == 'perempuan') {
        if ($g['ekspirasi'] >= 280 && $g['ekspirasi'] <= 500) {
            $apeNY += 1;
        } else {
            $apeBY += 1;
        }
    }
}

$imtNM = 0;
$imtPM = 0;
$imtBM = 0;
foreach ($antroM as $a) {
    if ($a['imt'] < 17) {
        $imtNM += 1;
    } else if ($a['imt'] >= 17 || $a['imt'] <= 25) {
        $imtPM += 1;
    } else if ($a['imt'] >= 26) {
        $imtBM += 1;
    }
}
//
$lpNM = 0;
$lpPM = 0;
$lpBM = 0;
foreach ($antroM as $b) {
    if ($b['lp'] < 85) {
        $lpNM += 1;
    } else if ($b['lp'] >= 86 || $b['lp'] <= 91) {
        $lpPM += 1;
    } else if ($b['lp'] >= 92) {
        $lpBM += 1;
    }
}
//
// <option value = "td" > Tekanan Darah < /option> <
//     option value = "gd" > Gula Darah < /option> <
//     option value = "kt" > Kolesterol Total < /option> <
//     option value = "au" > Asam Urat < /option> <
//     option value = "ape" > Arus Puncak Ekspirasi < /option>
$tdNM = 0;
$tdPM = 0;
$tdBM = 0;
foreach ($cekesM as $c) {
    if ($c['sistole'] <= 120 && $c['diastole'] <= 80) {
        $tdNM += 1;
    } else if ($c['sistole'] >= 121 && $c['sistole'] <= 139 || $c['diastole'] >= 81 && $c['diastole'] <= 90) {
        $tdPM += 1;
    } else if ($c['sistole'] >= 140 || $c['diastole'] >= 91) {
        $tdBM = 1;
    }
}

$gdNM = 0;
$gdPM = 0;
$gdBM = 0;
foreach ($cekesM as $d) {
    if ($d['jenis_gd'] == 'gds') {
        if ($d['gds'] <= 199) {
            $gdNM += 1;
        } else if ($d['gds'] >= 200) {
            $gdBM += 1;
        }
    } else if ($d['jenis_gd'] == 'gdp') {
        if ($d['gds'] <= 107) {
            $gdNM += 1;
        } else if ($d['gds'] >= 108 && $d['gds'] <= 125) {
            $gdPM += 1;
        } else if ($d['gds'] >= 126) {
            $gdBM += 1;
        }
    }
}

$ktNM = 0;
$ktPM = 0;
$ktBM = 0;
foreach ($cekesM as $e) {
    if ($e['kolesterol'] <= 170) {
        $ktNM += 1;
    } else if ($e['kolesterol'] >= 171 && $e['kolesterol'] <= 199) {
        $ktPM += 1;
    } else if ($e['kolesterol'] >= 200) {
        $ktBM += 1;
    }
}

$auNM = 0;
$auPM = 0;
$auBM = 0;
foreach ($cekesM as $f) {

    if ($f['asam_urat'] >= 6) {
        $auBM += 1;
    } else {
        $auNM += 1;
    }
}

$apeNM = 0;
$apePM = 0;
$apeBM = 0;
foreach ($cekesM as $g) {

    if ($g['ape'] == 'laki-laki') {
        if ($g['ekspirasi'] >= 500 && $g['ekspirasi'] <= 700) {
            $apeNM += 1;
        } else {
            $apeBM += 1;
        }
    } else if ($g['ape'] == 'perempuan') {
        if ($g['ekspirasi'] >= 280 && $g['ekspirasi'] <= 500) {
            $apeNM += 1;
        } else {
            $apeBM += 1;
        }
    }
}

$imtN = 0;
$imtP = 0;
$imtB = 0;
foreach ($antroY as $a) {
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
foreach ($antroY as $b) {
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
foreach ($cekesY as $c) {
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
foreach ($cekesY as $d) {
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
foreach ($cekesY as $e) {
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
foreach ($cekesY as $f) {

    if ($f['asam_urat'] >= 6) {
        $auB += 1;
    } else {
        $auN += 1;
    }
}

$apeN = 0;
$apeP = 0;
$apeB = 0;
foreach ($cekesY as $g) {

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
