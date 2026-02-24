import datetime


def sunday_dates(year):

    print("Sundays in the year", year)
    for month in range(1,13):

       for day in range(1,calendar.monthrange(year, month)[1]+1):

           date = datetime.datetime(year, month, day)
           if date.weekday() == 6:

              print(date.strftime("%d-%m-%Y"))

import calendar
year = int(input("Enter a year: "))
sunday_dates(year)
