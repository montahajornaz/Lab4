CC = gcc
CFLAGS = -c -Wall
OBJECTS = main.o isOdd.o
TARGET = main        # <- change from checkOdd to main

all: $(TARGET)

$(TARGET): $(OBJECTS)
	$(CC) $(OBJECTS) -o $(TARGET)

%.o: %.c
	$(CC) $(CFLAGS) $< -o $@

clean:
	rm -f *.o $(TARGET)
