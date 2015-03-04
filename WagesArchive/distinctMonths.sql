Select StartDate,EndDate
    from wagesarchive
    group by  Month(StartDate),year(StartDate)
    order by StartDate desc;