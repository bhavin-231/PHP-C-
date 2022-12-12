
#include <stdio.h>

int main() {
    float subject_1, subject_2, subject_3, subject_4, subject_5;
    float total, average, percentage;
    char grade;

    printf("Enter the marks of five subjects::\n");
    scanf("%f%f%f%f%f", &subject_1, &subject_2, &subject_3, &subject_4, &subject_5);

   
    total = subject_1 + subject_2 + subject_3 + subject_4 + subject_5;
    average = total / 5.0;
    percentage = (total / 500.0) * 100;

   
    if (average >= 75)
        grade = 'a';
    else if (average >= 60 && average < 75)
        grade = 'B';
    else if (average >= 50 && average < 60)
        grade = 'C';
    else if (average >= 35 && average < 50)
        grade = 'D';
    else
        grade = 'E';

    
    printf("\nThe Total marks is:  \t%.2f / 500.00\n", total);
    printf("\nThe Average marks is:\t%.2f\n", average);
    printf("\nThe Percentage is:   \t%.2f%%\n", percentage);
    printf("\nThe Grade is:        \t'%c'\n", grade);
    return 0;
}
