from datetime import date, timedelta

def sundays(year):
    d = date(year, 1, 1)
    d += timedelta(days = 6 - d.weekday())  # First Sunday
    while d.year == year:
        print(d)
        d += timedelta(days = 7)

year = int(input("Enter a year: "))
print("Sundays in year: ", year)
sundays(year)
