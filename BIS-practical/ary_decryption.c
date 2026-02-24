int main()
{
    int i;

    char a1[] = {'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'};
    char a2[] = {'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'A', 'B', 'C'};

    char text[20], temp;

    printf("Enter encrypted text: \n");
    gets(text);
	//printf(sizeof(text));

    for (i = 0; text[i] != '\0'; i++)
    {
        temp = text[i];

        if (temp >= a1[0] && temp <= a1[25])
        {
            temp = temp - 3;
            if (temp > a1[25])
            {
                temp = temp + a1[25] - a1[0] + 1;
               
            }
            text[i] = temp;
        }
        else if (temp >= a2[0] && temp <= a2[25])
        {
            temp = temp + 3; // value of key is 3
            if (temp > a2[25])
            {
                temp = temp + a2[25] - a2[0] + 1;
              
            }
            text[i] = temp;
        }
    }

    printf("plain text: %s", text);
    return 0;
}
