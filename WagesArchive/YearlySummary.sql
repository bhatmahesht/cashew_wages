select wagesarchive.`Name`,
        sum(wagesarchive.`Gross`),
        sum(wagesarchive.`Pf`),
	sum(wagesarchive.`PreDays`)
        from wagesarchive
        where Year(StartDate)=Year('2009-06-02')
        group by wagesarchive.`EmpID`;