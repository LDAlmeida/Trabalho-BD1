from django.shortcuts import render

def educatorr(request):
    return render(request, 'Moodle/index.html', {})
def curso(request):
    return render(request, 'Moodle/Curso.html', {})
def professor(request):
    return render(request, 'Moodle/Professor.html', {})

