#ifndef COMMON_H
#define COMMON_H

#ifdef __cplusplus
extern "C" {
#endif

class A {
public:
A();
virtual ~A();

virtual int foo(int);
};

#ifdef __cplusplus
}
#endif

#endif /*  COMMON_H */
