#include<iostream.h>
#include<conio.h>

class Vector {
private:
    int size;
    int *ptr;

public:
    // Parameterized constructor
    Vector(int s) {
        size = s;
        ptr = new int[size];
    }

    // Copy constructor
    Vector(const Vector &other) {
        size = other.size;
        ptr = new int[size];
        for (int i = 0; i < size; ++i) {
            ptr[i] = other.ptr[i];
        }
    }

    // Destructor
    ~Vector() {
        delete[] ptr;
    }

    // Method to accept a vector
    void acceptVector() {
        cout << "Enter " << size << " elements: ";
        for (int i = 0; i < size; ++i) {
            cin >> ptr[i];
        }
    }

    // Method to display a vector
    void displayVector() {
        cout << "(";
        for (int i = 0; i < size; ++i) {
            cout << ptr[i];
            if (i < size - 1) {
                cout << ", ";
            }
        }
        cout << ")" << endl;
    }

    // Method to calculate the union of two vectors
    Vector calculateUnion(const Vector &other) {
        int maxSize = (size > other.size) ? size : other.size;
        Vector result(maxSize);
        for (int i = 0; i < maxSize; ++i) {
            if (i < size && i < other.size) {
                result.ptr[i] = ptr[i] + other.ptr[i];
            } else if (i < size) {
                result.ptr[i] = ptr[i];
            } else {
                result.ptr[i] = other.ptr[i];
            }
        }
        return result;
    }
};

void main() {
    clrscr();
    int size1, size2;
    cout << "Enter the size of first vector: ";
    cin >> size1;
    Vector v1(size1);
    v1.acceptVector();

    cout << "Enter the size of second vector: ";
    cin >> size2;
    Vector v2(size2);
    v2.acceptVector();

    cout << "First vector: ";
    v1.displayVector();
    cout << "Second vector: ";
    v2.displayVector();

    Vector unionVector = v1.calculateUnion(v2);
    cout << "Union of the two vectors: ";
    unionVector.displayVector();

    getch();
}
