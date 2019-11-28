from django.urls import path
from educatorr import views

urlpatterns = [
    path('', views.educatorr, name='educatorr'),
]