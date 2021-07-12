/**
 * Created by john on 3/30/2020.
 */

function num_2_letter(number , use_separator) {
    if(use_separator === undefined){
        use_separator = true;
    }

    const separator = ((use_separator)?'-' : ' ');

    var nb, uniter, dizaine, centaine, millier, million, milliard, numerical, resultType;
    nb = Number(number);

    const moduloUniter = nb % 10;//nous donne le nombre d'uniter exemple 5 pour 255
    const moduloDizaine = ((nb % 100) - (nb % 10)) / 10;
    const moduloCentaine = ((nb % 1000) - (nb % 100)) / 100;
    const moduloMillier = ((nb % 1000000) - (nb % 1000)) / 1000;
    const moduloMillion = ((nb % 1000000000) - (nb % 1000000)) / 1000000;
    const moduloMilliard = ((nb % 1000000000000) - (nb % 1000000000)) / 1000000000;

    var specialCase = false;
    if (nb > 70 && nb < 77) {
        nb = nb - 60;
        resultType = "soixantaine";
        specialCase = true;
    }
    else if (nb > 90 && nb < 97) {
        nb = nb - 80;
        resultType = "quatreVinTaine";
        specialCase = true;
    }
    else if (nb > 9 && nb < 17) {
        resultType = "special";
        specialCase = true;
    }

    if (!specialCase) {
        //analyse des unités..
        switch (moduloUniter) {
            case 0 : uniter = "";       break;
            case 1:  uniter = 'un';     break;
            case 2:  uniter = 'deux';   break;
            case 3:  uniter = 'trois';  break;
            case 4:  uniter = 'quatre'; break;
            case 5:  uniter = 'cinq';   break;
            case 6:  uniter = 'six';    break;
            case 7:  uniter = 'sept';   break;
            case 8:  uniter = 'huit';   break;
            case 9:  uniter = 'neuf';   break;
        }
        //analyse des dizaines..
        switch (moduloDizaine) {
            case 1:  dizaine = 'dix';               break;
            case 2:  dizaine = 'vingt';             break;
            case 3:  dizaine = 'trente';            break;
            case 4:  dizaine = 'quarante';          break;
            case 5:  dizaine = 'cinquante';         break;
            case 6:  dizaine = 'soixante';          break;
            case 7:  dizaine = 'soixante'+separator+'dix';      break;
            case 8:  dizaine = 'quatre'+separator+'vingt';      break;
            case 9:  dizaine = 'quatre'+separator+'vingt'+separator+'dix';  break;
            default :dizaine = "";break;


        }
        //analyse des centaines..
        switch (moduloCentaine) {
            case 1:centaine = 'cent';                       break;
            case 2:centaine = 'deux '+separator+'cent';     break;
            case 3:centaine = 'trois'+separator+'cent';     break;
            case 4:centaine = 'quatre'+separator+'cent';    break;
            case 5:centaine = 'cinq'+separator+'cent';      break;
            case 6:centaine = 'six'+separator+'cent';       break;
            case 7:centaine = 'sept'+separator+'cent';      break;
            case 8:centaine = 'huit'+separator+'cent';      break;
            case 9:centaine = 'neuf'+separator+'cent';      break;
            default :centaine = "";                         break;
        }
        //analyse des millier..
        millier = num_2_letter2(moduloMillier , use_separator) + ' ' + ((moduloMillier > 0) ? 'milles' : '');
        if (moduloMillier === 1) {
            millier = millier.replace('un milles', 'mille');
        }
        //analyse des millions..
        million = num_2_letter2(moduloMillion , use_separator) + ' ' + ((moduloMillion > 0) ? 'millions' : '');
        //analyse des milliards..
        milliard = num_2_letter2(moduloMilliard, use_separator) + ' ' + ((moduloMilliard > 0) ? 'milliards' : '');
    }

    //if input number is a special case.... (10,11,12,....16)
    else if (specialCase) {
        switch (nb) {
            case 10:numerical   = "dix";        break;
            case 11:numerical   = "onze";       break;
            case 12:numerical   = "douze";      break;
            case 13 :numerical  = "treize";     break;
            case 14:numerical   = "quatorze";   break;
            case 15:numerical   = "quinze";     break;
            case 16:numerical   = "seize";      break;
        }

    }

    //message a afficher pour un nombre special..
    if (resultType === "special") {
        return numerical;
    }
    else if (resultType === "soixantaine") {
        return 'soixante'+separator+'' + numerical;
    }
    else if (resultType === "quatreVinTaine") {
        return 'quatre'+separator+'ving'+separator+'' + numerical;
    }
    // input is common
    else {
        var numberCat = number.length;
        const result_dizaine = dizaine + '' + ((uniter.length > 0) ? ''+separator+'' : '') + '' + uniter;
        const result_centaine = centaine + '' + ((dizaine.length > 0) ? ''+separator+'' : '') + '' + result_dizaine;
        const result_millier = millier + ' ' + result_centaine;
        const result_million = million + ' ' + result_millier;
        const result_milliard = milliard + ' ' + result_million;
        switch (numberCat) {
            case 1 :return uniter;
            case 2 :return result_dizaine;
            case 3 :return result_centaine;
            case 4 :case 5:case 6:return result_millier;
            case 7 :case 8:case 9:return result_million;
            case 10 :case 11:case 12:return result_milliard;
        }
    }
}

function num_2_letter2(number, use_separator) {
    if(use_separator === undefined){
        use_separator = true;
    }
    const separator = ((use_separator)?'-' : ' ');

    var nb, uniter, dizaine, centaine, numerical, resultType;
    number = '' + number + ''; //conver number to string
    nb = Number(number);

    var moduloUniter = nb % 10;//nous donne le nombre d'uniter exemple 5 pour 255
    var moduloDizaine = ((nb % 100) - (nb % 10)) / 10;
    var moduloCentaine = ((nb % 1000) - (nb % 100)) / 100;

    var specialCase = false;
    if (nb > 70 && nb < 77) {
        nb = nb - 60;
        resultType = "soixantaine";
        specialCase = true;
    }
    else if (nb > 90 && nb < 97) {
        nb = nb - 80;
        resultType = "quatreVinTaine";
        specialCase = true;
    }
    else if (nb > 9 && nb < 17) {
        resultType = "special";
        specialCase = true;
    }

    if (!specialCase) {
        //analyse des unités
        switch (moduloUniter) {
            case 0 : uniter = "";       break;
            case 1:  uniter = 'un';     break;
            case 2:  uniter = 'deux';   break;
            case 3:  uniter = 'trois';  break;
            case 4:  uniter = 'quatre'; break;
            case 5:  uniter = 'cinq';   break;
            case 6:  uniter = 'six';    break;
            case 7:  uniter = 'sept';   break;
            case 8:  uniter = 'huit';   break;
            case 9:  uniter = 'neuf';   break;
        }
        //analyse des dizaines
        switch (moduloDizaine) {
            case 1:  dizaine = 'dix';               break;
            case 2:  dizaine = 'vingt';             break;
            case 3:  dizaine = 'trente';            break;
            case 4:  dizaine = 'quarante';          break;
            case 5:  dizaine = 'cinquante';         break;
            case 6:  dizaine = 'soixante';          break;
            case 7:  dizaine = 'soixante'+separator+'dix';      break;
            case 8:  dizaine = 'quatre'+separator+'vingt';      break;
            case 9:  dizaine = 'quatre'+separator+'vingt'+separator+'dix';  break;
            default :dizaine = "";break;


        }
        //analyse des centaines..
        switch (moduloCentaine) {
            case 1:centaine = 'cent';                       break;
            case 2:centaine = 'deux '+separator+'cent';     break;
            case 3:centaine = 'trois'+separator+'cent';     break;
            case 4:centaine = 'quatre'+separator+'cent';    break;
            case 5:centaine = 'cinq'+separator+'cent';      break;
            case 6:centaine = 'six'+separator+'cent';       break;
            case 7:centaine = 'sept'+separator+'cent';      break;
            case 8:centaine = 'huit'+separator+'cent';      break;
            case 9:centaine = 'neuf'+separator+'cent';      break;
            default :centaine = "";                         break;
        }
    }

    //if input number is a special case.... (10,11,12,....16)
    else if (specialCase) {
        switch (nb) {
            case 10:
                numerical = "dix";
                break;
            case 11:
                numerical = "onze";
                break;
            case 12:
                numerical = "douze";
                break;
            case 13 :
                numerical = "treize";
                break;
            case 14:
                numerical = "quatorze";
                break;
            case 15:
                numerical = "quinze";
                break;
            case 16:
                numerical = "seize";
                break;
        }

    }

    //message a afficher pour un nombre special..
    if (resultType === "special") {
        return numerical;
    }
    else if (resultType === "soixantaine") {
        return 'soixante'+separator+'' + numerical;
    }
    else if (resultType === "quatreVinTaine") {
        return 'quatre'+separator+'ving'+separator+'' + numerical;
    }
    // input is common
    else {
        var numberCat;
        switch (number.length) {
            case 1:
                numberCat = 1;
                break; //pour unité
            case 2:
                numberCat = 2;
                break; //pour dizaines
            case 3:
                numberCat = 3;
                break; // for centaines
        }

        switch (numberCat) {
            case 1 :
                return uniter;
            case 2 :
                return dizaine + '' + ((uniter.length > 0) ? ''+separator+'' : '') + '' + uniter;
            case 3 :
                return centaine + '' + ((dizaine.length > 0) ? ''+separator+'' : '') + '' + dizaine + '' + ((uniter.length > 0) ? ''+separator+'' : '') + '' + uniter;
        }
    }
}
