<?php
class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'message'];
}
