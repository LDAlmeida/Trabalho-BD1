from django.shortcuts import render

def educatorr(request):
    return render(request, 'Moodle/index.html', {})
