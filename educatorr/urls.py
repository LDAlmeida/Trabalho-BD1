from django.urls import path
from educatorr import views
from django.conf.urls import url
from django.conf import settings
from django.conf.urls.static import static

urlpatterns = [
    path('', views.educatorr, name='educatorr'),
    path('Curso.html', views.curso, name='curso'),
    path('Professor.html', views.professor, name='professor'),
] + static(settings.STATIC_URL, document_root = settings.STATIC_ROOT)