package com.example.a1216qdf.yzu1021803;

import android.graphics.Color;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;

public class yzu1021803 extends AppCompatActivity {
    private LinearLayout ll;
    private EditText edC;
    private EditText edF;
    private Button btnGo;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_yzu1021803);
        ll=(LinearLayout)findViewById(R.id.mainlayout);
        ll.setBackgroundColor(Color.GRAY);
        edC=new  EditText(this);
        ll.addView(edC);
        edF =new EditText(this);
        ll.addView(edF);
        btnGo=new Button(this);
        btnGo.setBackgroundResource(R.drawable.bggg);
        //btnGo.setText(R.string.btntitle);
        ll.addView(btnGo);
        btnGo.setOnClickListener(new Button.OnClickListener() {

            @Override
            public void onClick(View v) {
                double c=Double.parseDouble(edC.getText().toString());
                double f=32+c*9/5.;
                edF.setText(String.valueOf(f));
            }
        });
    }
}
