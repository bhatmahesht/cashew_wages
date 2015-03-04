Select 
    StartDate,EndDate from wagesarchive
    group by  year(StartDate)
    order by StartDate desc;