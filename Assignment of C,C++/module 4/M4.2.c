#include <stdio.h>

int main(void) {

  FILE *fptr;
 
  int id, score;
  int i, s;
  
 
  char name[255];
  char n[255];
  
  
  fptr = fopen("student", "w");
  
  if (fptr != NULL) {
    printf("File created successfully!\n");
  }
  else {
    printf("Failed to create the file.\n");

    return -1;
  }
  
  
  printf("Enter student name: ");
  gets(name);
  printf("Enter student ID: ");
  scanf("%d", &id);
  printf("Enter student score: ");
  scanf("%d", &score);
  

  fprintf(fptr, "%d %d %s", id, score, name);
  
 
  fclose(fptr);
  

  fptr = fopen("student", "r");
  
 
  printf("\nStudent Details:\n");
  fscanf(fptr, "%d %d %[^\n]s", &i, &s, n);
  printf("ID: %d\n", i);
  printf("Name: %s\n", n);
  printf("Score: %d\n", s);
  
  printf("\nEnd of file.\n");
  
 
  fclose(fptr);
  
  return 0;
}
