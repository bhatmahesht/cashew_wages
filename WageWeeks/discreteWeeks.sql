select count(1) from wageweeks
        where ('2009-07-10' between wageweeks.`StartDate` and Wageweeks.`EndDate`)
       or ('2009-07-17' between wageweeks.`StartDate` and wageweeks.`EndDate`)

select count(1) from wageweeks
        where (('2009-07-10' between wageweeks.`StartDate` and Wageweeks.`EndDate`)
       or ('2009-07-17' between wageweeks.`StartDate` and wageweeks.`EndDate`)) and (wageweeks.ID!=8)