select wagesarchive.`Name`,
        sum(wagesarchive.`Gross`),
        sum(wagesarchive.`Pf`)
        from wagesarchive
        where Month(StartDate)=Month('2009-06-02') and
              Year(StartDate)=Year('2009-06-02')
        group by wagesarchive.`EmpID`
        order by wagesarchive.`EmpID`;