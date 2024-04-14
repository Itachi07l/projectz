#include<iostream.h>
#include<conio.h>

class MyArray {
private:
    int *arr;
    int size;

public:
    // Constructor
    MyArray(int s) {
        size = s;
        arr = new int[size];
    }

    // Destructor
    ~MyArray() {
        delete[] arr;
    }

    // Method to accept array elements
    void acceptArray() {
        cout << "Enter " << size << " elements: ";
        for (int i = 0; i < size; ++i) {
            cin >> arr[i];
        }
    }

    // Method to display array elements
    void displayArray() {
        cout << "Array elements: ";
        for (int i = 0; i < size; ++i) {
            cout << arr[i] << " ";
        }
        cout << endl;
    }

    // Overloading unary operator -
    void operator-() {
        for (int i = 0; i < size / 2; ++i) {
            int temp = arr[i];
            arr[i] = arr[size - 1 - i];
            arr[size - 1 - i] = temp;
        }
    }

    // Overloading binary operator +
    MyArray operator+(int n) {
        MyArray result(size);
        for (int i = 0; i < size; ++i) {
            result.arr[i] = arr[i] + n;
        }
        return result;
    }
};

void main() {
    clrscr();
    int size, constant;
    cout << "Enter the size of the array: ";
    cin >> size;

    MyArray array(size);
    array.acceptArray();

    // Display original array
    cout << "Original ";
    array.displayArray();

    // Unary operator overloading
    -array;
    cout << "Reversed ";
    array.displayArray();

    // Binary operator overloading
    cout << "Enter a constant to add to all array elements: ";
    cin >> constant;
    MyArray resultArray = array + constant;
    cout << "Array after adding " << constant << " to each element: ";
    resultArray.displayArray();

    getch();
}
